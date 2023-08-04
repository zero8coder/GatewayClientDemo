<?php

namespace Tests\Feature;

use App\Models\Chat;
use Tests\TestCase;

class ChatTest extends TestCase
{
    public function test_bind()
    {
        $this->signIn();
        $client_id = 'sdfsdfsfsdfsdfsdffsdf';
        $response = $this->json('post', route('bind'), ['client_id' => $client_id]);
        $response->assertStatus(200);
        $this->assertDatabaseHas('chats', ['user_id'=> auth()->id(), 'client_id' => $client_id]);
    }
}
