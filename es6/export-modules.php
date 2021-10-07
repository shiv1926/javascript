<?php include('header.php'); ?>
<ul>
    <li>Exporting a module means, export all or some of the functions, method and properties, so that any one can use the available functions later.</li>
    <li>To export a variable, a function, or a class, you place the export keyword in front of it as follows:</li>
    <li>
        // log.js
export let message = 'Hi';

export function getMessage() {
  return message;
}

export function setMessage(msg) {
  message = msg;
}

export class Logger {
}

    </li>

<li>Note that the export keyword requires the function or class to have a name to be exported. You can’t export an anonymous function or class using this syntax.</li>
<li>JavaScript allows you to define a variable, a function, or a class first then export it later as follows:
// foo.js
function foo() {
   console.log('foo');
}

function bar() {
  console.log('bar');
}
export foo;

</li>
<script>
let area = function (length, breadth) {
    let a = length * breadth;
    console.log('Area of the rectangle is ' + a + ' square unit');
}
  
let perimeter = function (length, breadth) {
    let p = 2 * (length + breadth);
    console.log('Perimeter of the rectangle is ' + p + ' unit');
}
  
module.exports = {
    area,
    perimeter
}
</script>    
</ul>
<?php include('footer.php'); ?>