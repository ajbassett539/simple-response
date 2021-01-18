<?php
    ////////////////////////////////////////////////////////////////////////////
    // SimpleResponse\JSONResponse
    ////////////////////////////////////////////////////////////////////////////
    
    namespace SimpleResponse;

    class JSONResponse {
        public $data;

        ////////////////////////////////////////////////////////////////////////
        function __construct($data = NULL, $exit = true, $extraHeaders = Array()) {
            $this->data = $data;
            if( $exit ) {
                if( !empty($extraHeaders) )
                    foreach( $extraHeaders AS $header ) 
                        header($header);
                header("Content-Type: application/json");
                exit($this);
            }
        }
        
        ////////////////////////////////////////////////////////////////////////
        public function __toString() {
            $string = json_encode($this->data) . "";
            return $string;
        }
    }
