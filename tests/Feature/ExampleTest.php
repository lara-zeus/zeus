<?php

it('returns a successful response', function () {
    $response = $this->get('/blog');

    $response->assertStatus(200);
});
