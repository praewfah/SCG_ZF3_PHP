<?php

return array(
    array(
        'id' => 'home',
        'label' => 'Home',
        'link' => $this->url('home').'index'
    ),
    array(
        'id' => 'google',
        'label' => 'Google API',
        'link' => $this->url('google')
    ),
    array(
        'id' => 'line',
        'label' => 'Line messaging API',
        'link' => $this->url('line')
    ),
    array(
        'id' => 'function',
        'label' => 'Function for finding value',
        'dropdown' => array(
            array(
                'id' => 'xyz',
                'label' => 'Finding X, Y, Z value',
                'link' => $this->url('doscg', ['action'=>'api', 'id'=>'xyz'])
            ),
            array(
                'id' => 'bc',
                'label' => 'Finding B and C value',
                'link' => $this->url('doscg', ['action'=>'api', 'id'=>'bc'])
            ),
        )
    ),
    array(
        'id' => 'cv',
        'label' => 'My CV',
        'link' => $this->url('cv')
    ),
);
