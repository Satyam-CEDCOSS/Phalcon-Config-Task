<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
        // Redirected to View
        echo $this->container->get('config')->app->name;
        echo "<br>";
        echo $this->config->app->version;
        echo "<br>";
        
        echo $this->configs->database->adapter;
        
        echo "<br>";
        echo "DataBase Table";
        echo "<br>";
        $sql = 'SELECT * FROM Users';
        $query = $this->modelsManager->createQuery($sql);
        $exe = $query->execute();
        foreach ($exe as $value) {
            echo "<tr>";
            echo "<td>  ".$value->id."  </td><td>  ".$value->name."  </td>";
            echo "<td>  ".$value->email."  </td>";
            echo "</tr>";
            echo "<br>";
        }
        die;
    }
}