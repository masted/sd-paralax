<?php

class CtrlSdParalax extends CtrlCommon {

  function action_default() {
    $this->d['mainTpl'] = 'paralax/main';
    $this->d['blocks'] = ['A', 'D', 'S'];
  }

  function action_json_import() {
    $this->json['asd'] = 456;
  }

}