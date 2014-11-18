Visitors
========
This lets you count the number of unique visitors on your page

Add this to your CDIFactoryDefault.php

$this->setShared('visitors', function() {   
            $visit = new \Anax\Visitors\CVisitors($this);   
            //$visit->setDI($this);   
            return $visit;   
        });    
         
Then add $visits = $app->visitors->countVisitors(); wherever you want to display your visitors count.
        
