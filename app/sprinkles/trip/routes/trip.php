<?php

$app->get('/members', 'UserFrosting\Sprinkle\Trip\Controller\TripController:pageMembers')
    ->add('authGuard');
