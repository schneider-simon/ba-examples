<?php

namespace Examples\DIP\General;


use Examples\General\ElasticSearchClient;

class ElasticSearchUserRepository implements UserRepository
{
    private $client;

    private $solidRepository;


    public function __construct(ElasticSearchClient $client, MysqlUserRepository $repository)
    {
        $this->client = $client;
        $this->solidRepository = $repository;
    }

    public function save(array $data) : User
    {
        return $this->solidRepository->save($data);
    }

    public function findByEmail(string $email) : User
    {
        logAction('Search from ElasticSearch: $this->client->search(...)');
        return new User();
    }

    public function all() : array
    {
        logAction('Get all from ElasticSearch: $this->client->all()');
        return [];
    }
}