<?php

class CtrlSdParalax extends CtrlCommon {

  function action_default() {
    die2(22);
    $this->d['blocks'] = ['A', 'D', 'S'];
  }

  function action_json_import() {
    $this->json['asd'] = 456;
  }

}