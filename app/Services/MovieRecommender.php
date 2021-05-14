<?php
namespace App\Services;

use App\Models\User;


class MovieRecommender
{
    
    /**
     * user
     *
     * @var \App\Models\User
     */
    protected $user;
    
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    /**
     * Recommendations for the user from previous orders
     *
     * @return void
     */
    public function getRecommendations()
    {
        
    }
}