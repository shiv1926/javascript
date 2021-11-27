stop using var
stop using == and !=, or weak equaity opeators, weak equality operators automatically type cast, use strict equality operators like === and !==
always use strict mode
stop using too much callbacks, instead use promises
use functional programming and new functions like map, reduce, filter etc


a function can return multiple values example : 
function stat(a, b) {
    return [
        a + b,
        (a + b) / 2,
        a - b
    ]
}