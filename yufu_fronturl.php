<?php
require_once("java/Java.inc");
 // java_require("test3.jar");
$myj = new Java("main.Start");


$merchantId =
'000001110100000501';
$data =
'3csowNQazsc3RJvX4tNhPPVge551iZ8jd60KD0faMX8mluVXHAUSF0OsWK4xye/Rc/LcRigZvmymC2hoqf/g96Qv4p9XKvo3fUSf02RPzUdGtCaaQ3JI5hF0Z68tk/8C5tnmrsLyCskI+SNyqfgLRAmxKz/sjhFT8M3LBXdQIQqiqmix9JV3tH4bNfNPJDn2Xg8KiDb3Paf1NlUe4ti67Aw8UeQWw3bwviXAIJ7d8UA/gIU4DwZw7ec3v1AgjKrl/ERsdxlEsEJvhzhgfs8gSyTUd55XxINeFEsCQX0tUG6H/Mwlcd5hqeq8aMseIFI+9Sq5bNRhD5WkD58LU+lke0GCqK86c6cpyP6a2cMCJ8w+nbU+5uHJYGJvFnQUTkZhtKZ9h05guaujIdjSNpvJk8LTMehT/DSu9/tOuc9sfquSIfWOEwycaM0b/YzsokLcasRjUVU5b5AAMwOdfcjgmKC74BV/XbT+nndE9T/4Btw6y4C82W354Rsk/RKSnGdTG18ejYpVfZX3yuXSY9IS8xW2pNv0e3i/WNiriLGQYm3qePB5fDDiREDMXR5WG2Bphr7qdGqTq/kzzTvwotgCdhRTbbFucoWRF5GjpLw+ghM=';
$enc =
'MIIBAgYJKoZIhvcNAQcDoIH0MIHxAgECMYGuMIGrAgECgBQjD10u8kRx55fvKaT0i4WEhKaKUjANBgkqhkiG9w0BAQEFAASBgDFhLn8n1HGyBIflYbqac4aQpdVlk1uGVJWfuPT536NnFQz6kPw52be7D1Op+C0Fft1iidFGmqt5p7OWjtFqI/UpW4hnXNWsCJEb1uh8AD1Dg8EXxWSyVdMusr5q2E0CynHXAXgdOjRB1cSaPWPrIl64Thv3XXeJcLLEJ3/lCZOtMDsGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQIouOEVCfE7WqAGH+ohKHP6yh8A04vFEzBXFqRKK068dxYHg==';
$sign =
'U/WoJL8PNAzUY+PXE6IY1U/HKb/gcSmwlRK4ghLyCmGP4eltN3JqnSY6Jbpm9B68/GVaTrjR6fe3eTTBGp04t20tdR9KVKAm+oFYlaZ5I7UB2vXyDYfvijWgYv4b8yA4suQCuPiaoe8KlF9zp967AT7ZlqVvvGr8Gch0llTrKNM=';

$re =  $myj->PayReturn($data,$enc,$sign);
$re = java_values($re);
print_r($re);



?>
