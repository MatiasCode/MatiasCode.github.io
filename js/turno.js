import data from './data.js';
$(document).ready(() => {
    
    var hoy = moment().format('yyyy-MM-DD');
    //alert(hoy)
    $('#filterDate').val(hoy);
    var turnos = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L']
    $('#seeDate').click( (e) => {        
        var input = $('#filterDate').val();
        //alert(input)
        fillList(makeDiff(input));
    });
    
    var fecha_turno_a = moment('2020-09-06').format('YYYY-M-D');
    //var diff = moment().diff(fecha_turno_a, 'days');
    
    function makeDiff(date){
        var diff
        if(date == null){
            diff = moment().diff(fecha_turno_a, 'days');
        }else{
            diff = moment(date).diff(fecha_turno_a, 'days');
        }
        return diff
    }
    

    function check(d) {
        console.log(`variable D => ${d}`)
        if (d < 12) {
            return turnos[d];
        } else if (d == 12) {
            return turnos[0]
            // representa el turno A y debe guardarse la fecha en la db
        }
        else {

            //let x = Math.floor(d / 11);
            let x = d - 12;
            return check(x)
        }
    }

    function fillList(dt){
        var turno_actual = check(dt);
        //$('#contenList').child().remove();
        $('#contentList').empty();
        data.forEach(element => {
            if(element.turno == turno_actual){
                $('#contentList').append(`<li> <strong> ${element.nombre} </strong> </li>`);
            }
        });
    }
    

    fillList(makeDiff(hoy));

})