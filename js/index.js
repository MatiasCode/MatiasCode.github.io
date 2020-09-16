var fecha_turno_a = moment('2020-09-06').format('YYYY-M-D');

var hoy = moment().format('YYYY-M-D');
//test -> var diff = moment('2020-10-20').diff(fecha_turno_a, 'days');
var diff = moment().diff(fecha_turno_a, 'days');

var turnos = [ 'A' , 'B', 'C' , 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L' ]


function check(d){
    console.log(`variable D => ${d}`)
    if(d < 12){
        return turnos[d];
    }else if(d == 12){
        return turnos[0]
        // representa el turno A y debe guardarse la fecha en la db
    }
    else{
        
        //let x = Math.floor(d / 11);
        let x = d - 12;
        return check(x)
    }
}

var turno_actual = check(diff);
console.log(`HOY TOCA TURNO ====> ${turno_actual}`)

//var test = Math.floor(10 / 12);
//console.log(test)