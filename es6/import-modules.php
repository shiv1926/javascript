<?php include('header.php'); ?>
<ul>
    <li>Importig a modules means, include a library in our code so that we can use the available functions of that library.</li>
    <li>Once you define a module with exports, you can access the exported variables, functions, and classes in another module by using the import keyword. The following illustrates the syntax:
import { what, ever } from './other_module.js';


Import an entire module as an object
import * as cal from './cal.js';
In this example, we imported all bindings from the cal.js module as the cal object. In this case, all the bindings become properties of the cal object, so you can access them as shown below:
cal.a;
cal.b;
cal.sum();

It’s important to keep in mind that the imported module executes only once even import it multiple times. Consider this example:
After the first import statement, the cal.js module is executed and loaded into the memory, and it is reused whenever it is referenced by the subsequent import statement.




</li>
</ul>
<?php include('footer.php'); ?>
https://www.tutorialspoint.com/es6/es6_modules.htm