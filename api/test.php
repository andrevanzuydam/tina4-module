<?php

\Tina4\Get::add ("/module/test/include", function(\Tina4\Response $response) {

    return $response ( (new ModuleTest())->test("Testing the module for includes"));
});

\Tina4\Get::add ("/module/test/orm", function(\Tina4\Response $response) {

    $user = new User();
    $user->firstName = "Test";
    $user->lastName = "Module";
    $user->id = 1;

    return $response ( $user );
});

\Tina4\Get::add ("/module/test/render", function(\Tina4\Response $response) {

    return $response ( \Tina4\renderTemplate("module.twig") );
});
