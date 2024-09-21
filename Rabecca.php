<?php

function call_name(): string{
  $name = "TUSHABOMWE RABECCA";

return $name;
}

function my_age($c_year, $dob): float|int{
  $age = $c_year - $dob;
return $age;
}

function home_address(): string{
  $address = "Rubanda";
  return $address;
}
print ( "Welcome home" call_name()."! <br> I am a born of 2001 and my home address is ".home_address()."<br>"."I am ".my_age(c_year: 2024, dob: 2001));
