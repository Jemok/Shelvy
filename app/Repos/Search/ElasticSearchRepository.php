<?php namespace App\Repos\Search;

use Illuminate\Support\Collection;

use Elasticsearch\Client;

use App\Interfaces\Search\SearchInterface;

/**
 * THE MAIN ELASTICSEARCH REPOSITORY
 * Class ElasticSearchRepository
 * @package App\Repos\Search
 */
class ElasticSearchRepository implements SearchInterface
{
    /**
     * @var \Elasticsearch\Client
     */


    private $elasticsearch;


    /**
     * @param Client $client
     *
     */
    public function __construct(Client $client)
    {
        $this->elasticsearch = $client;

    }

    /**
     * Elastic search search method
     * @param string $query
     * @param string $key
     * @param string $index
     * @param string $type
     * @param string $modelField
     * @param string $key_one
     * @param string $key_two
     * @param string $model
     *@return Collection|mixed
     */
    public function search($key = "", $query = "", $index = "", $type = "", $modelField ="", $model = "", $key_one = "", $key_two="")
    {
      $items = $this->searchOnElasticsearch($query, $index, $type, $modelField);

     //dd($items);

      return $this->buildCollection($items, 'App\\'.$model, $modelField);

    }

    /**
     * Search a file that belongs to a particular user
     * @param $query
     * @return Collection
     *
     */

    public function searchFile($query)
    {

      $items = $this->searchFiles($query);

      return $this->buildCollection($items, 'App\\Story', "");

    }

    /**
     * Retrieves all records
     * @param $model
     * @param string $query
     * @param string $key
     * @param string $index
     * @param string $type
     * @return Collection
     */
    public function all($model="", $query = "", $index="", $type="", $key="")
    {
        $items = $this->searchOnElasticsearch($query, $index, $type);

        //return $items['hits']['hits'];

        return $this->buildCollection($items, 'App\\'.$model, "");

    }

    private function searchFiles($query)
    {

        $comments = $this->elasticsearch->search([

            'index' => 'student',
            'type'  => 'files',
            'body' => [
                'query' => [
                    'match' => [
                        'user_id' => $query
                    ]
                ]
            ]

        ]);

        //dd($comments);

        return $comments;

    }

    /**
     * Method performs actual search on elastic search
     * @param $query
     * @param $index
     * @param $type
     * @param $modelField
     * @return array
     */
    private function searchOnElasticsearch($query="", $index="", $type="", $modelField="")
    {
        if($query != '_search')
        {

        //This code performs full text search on all the fields
        $items = $this->elasticsearch->search([
            'index' => $index,
            'type'  => $type,
            'body' => [
                 'query' => [
                      'match' => [
                          $modelField => [
                              'query' => $query,
                              //'analyzer' => 'search_grams',
                              //Improves precision for multiword queries
                              //'operator' => 'and'
                              //USE PERCENTAGES FOR BETTER PRCISION
                              'minimum_should_match' => '75%'
                          ],

                      ]
                    ],
                "highlight"=> [

                    "pre_tags"=> ["<em class='hlt5'>"],
                    "post_tags"=> ["</em>"],

                        "fields" => [
                            $modelField => (object)[]
                    ]
                ]
            ]
        ]
    );

    }
        else
    {
          //This code retrieves all documents in a particular file
            $items = $this->elasticsearch->search([
                'index' => $index,
                'type' => $type,
                'body' => [
                    'query' => [
                        'match_all' => []
                    ]
                ]
            ]);
    }

       //dd($items);

       return $items;
    }

    /**
     * THIS METHOD IS NOT USED IN THIS REPO
     * Build fields from the elastic search results
     * @param array $items the elasticsearch results
     * @param $model
     * @param string $modelField
     * @return Collection of Eloquent models
     */
    private function buildCollection($items, $model, $modelField)
    {
        $results  = $items['hits']['hits'];

        return Collection::make(array_map(function($r) use($model, $modelField) {

            if(isset($r['highlight'][$modelField][0]))
            {
                $r['_source'][$modelField."Highlight"] = $r['highlight'][$modelField][0];
            }


            $model = new $model;
            $model->newInstance($r['_source'], true);
            $model->setRawAttributes($r['_source'], true);
            return $model;
        }, $results));

    }
}