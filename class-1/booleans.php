<?php
// == means "would a reasonable human being consider these equal?"
// use this most of the time
1 == true; //true

// === means "no really, i'm serious, are they exactly the same"
1 === true; //false


// there are no types, unless you use ===, and then there are
"1" == 1; //true
"1" === 1; //false

"1" > 0; //true
1 > 0; //true

echo(true); // 1;
echo(false); // nothing;