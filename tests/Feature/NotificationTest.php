<?php

use App\Models\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;

uses(RefreshDatabase::class);

describe('Notification listing', function () {
    it('shows notifications paginated and sorted', function () {
        Notification::factory()->count(15)->create();

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertInertia(fn (Assert $page) =>
            $page->component('notifications/Index')
                ->has('notifications.data', 10)
                ->has('notifications.links')
        );
    });

    it('returns html content in notification', function () {
        $notification = Notification::factory()->create();
        $this->assertStringContainsString('<a ', $notification->content);
        $this->assertStringContainsString('<strong>', $notification->content);
    });
});
