<?php

namespace Ridwan\ChatGPTIntegration;

use OpenAI\Client;
use Illuminate\Http\Client\Response;




class ChatGPTClient 
{
    private Client $client;

    public function __construct(string $apiKey)
    {
        $this->client = new Client($apiKey);
    }

    public function generateCompletion(string $prompt, array $options = []): Response
    {
        return $this->client->completions()->generate([
            'prompt' => $prompt,
            'options' =>$options
        ]);
    }
}