<?php

it('can access the Katra route', function () {
    $response = $this->get('katra');
    $response->assertStatus(200);
    $response->assertSee('Hello from the Katra package!');
});
