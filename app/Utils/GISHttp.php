<?php

namespace App\Utils;

class GISHttp extends BaseHttp
{
    private const ENDPOINT = 'https://gisapis.manpits.xyz';
    private $token;

    /**
     * Create road
     *
     * @param $payload
     * @return array|mixed
     */
    public function createRoad($payload)
    {
        return $this->post(self::ENDPOINT . '/api/ruasjalan', $payload, ["Authorization" => "Bearer {$this->token}"])->json();
    }

    /**
     * Update road
     *
     * @param $id
     * @param $payload
     * @return array|mixed
     */
    public function updateRoad($id, $payload)
    {
        return $this->put(self::ENDPOINT . "/api/ruasjalan/{$id}", $payload, ["Authorization" => "Bearer {$this->token}"])->json();
    }

    /**
     * Delete road
     *
     * @param $id
     * @return array|mixed
     */
    public function deleteRoad($id)
    {
        return $this->delete(self::ENDPOINT . "/api/ruasjalan/{$id}", [], ["Authorization" => "Bearer {$this->token}"])->json();
    }

    /**
     * Get list of road
     *
     * @return array|mixed
     */
    public function listRoad()
    {
        return $this->get(self::ENDPOINT . '/api/ruasjalan', [], ["Authorization" => "Bearer {$this->token}"])->json();
    }

    /**
     * Get road by id
     *
     * @param $id
     * @return array|mixed
     */
    public function getRoadById($id)
    {
        return $this->get(self::ENDPOINT . "/api/ruasjalan/{$id}", [], ["Authorization" => "Bearer {$this->token}"])->json();
    }

    /**
     * Check user if had login or not
     *
     * @return array|mixed
     */
    public function checkUser()
    {
        return $this->get(self::ENDPOINT . '/api/user', [], ["Authorization" => "Bearer {$this->token}"])->json();
    }

    /**
     * Login method for GIS
     *
     * @param $payload
     * @return array|mixed
     */
    public function login($payload)
    {
        return $this->post(self::ENDPOINT . '/api/login', $payload)->json();
    }

    /**
     * Login method for GIS
     *
     * @param $payload
     * @return array|mixed
     */
    public function register($payload)
    {
        return $this->post(self::ENDPOINT . '/api/register', $payload)->json();
    }

    /**
     * Get list of province
     *
     * @return array|mixed
     */
    public function listProvince()
    {
        return $this->get(
            self::ENDPOINT . '/api/mregion',
            [],
            ["Authorization" => "Bearer {$this->token}"]
        )->json();
    }

    /**
     * Get list of existing road
     *
     * @return array|mixed
     */
    public function listExistingRoad()
    {
        return $this->get(
            self::ENDPOINT . '/api/meksisting',
            [],
            ["Authorization" => "Bearer {$this->token}"]
        )->json();
    }

    /**
     * Get list of road condition
     *
     * @return array|mixed
     */
    public function listRoadCondition()
    {
        return $this->get(
            self::ENDPOINT . '/api/mkondisi',
            [],
            ["Authorization" => "Bearer {$this->token}"]
        )->json();
    }

    /**
     * Get list of road type
     *
     * @return array|mixed
     */
    public function listRoadType()
    {
        return $this->get(
            self::ENDPOINT . '/api/mjenisjalan',
            [],
            ["Authorization" => "Bearer {$this->token}"]
        )->json();
    }

    /**
     * @param mixed $token
     */
    public function setToken($token): void
    {
        $this->token = $token;
    }
}
