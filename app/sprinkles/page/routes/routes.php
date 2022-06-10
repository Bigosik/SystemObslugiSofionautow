<?php

$app->get('/members', 'UserFrosting\Sprinkle\Page\Controller\PageController:pageMembers')
    ->add('authGuard'); 
