import './bootstrap';

import { Datepicker, Input, initTE } from "tw-elements";
initTE({ Datepicker, Input });

import { Datepicker, Input } from "tw-elements";

const myInput = new Input(document.getElementById("myDatepicker"));
const options = {
  format: "dd-mm-yyyy",
};
const myDatepicker = new Datepicker(
  document.getElementById("myDatepicker"),
  options
);

// Initialization for ES Users
import {
    Collapse,
    Dropdown,
    initTE,
  } from "tw-elements";
  
  initTE({ Collapse, Dropdown });