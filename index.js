var ans=['A','B','A','C','D','A','B','C','A','D'];
var qcount=0;
var score=0;
var weight=[2,2,3,3,4,4,5,5,10,10];
var questionno=["1","2","3","4","5","6","7","8","9","10"];
var lev=0;
var a=0;
var f;
function disp()
{ 
    a=1;
    score=0;
    for(qcount=0;qcount<10;qcount++)
    {
        var ele = document.getElementsByName(questionno[qcount]); 
              
            for(i = 0; i < ele.length; i++) { 
                console.log(ele[i].value);
                if(ele[i].checked) 
                {
                    if(ele[i].value==ans[qcount])
                    {
                        score=score+weight[qcount];

                    }
                }
            }
            

    }
    document.getElementById('result').innerHTML="SCORE:"+score;

    if(score<=20)
    {
        document.getElementById('level').innerHTML="1";
    }
    else if(score>20&&score<=35)
    {
        document.getElementById('level').innerHTML="2";
    }
    else
    {
        document.getElementById('level').innerHTML="3";
    }
}

function timer()
{
    var i=1;
    var wid=0;
    f=setInterval(()=>{
    wid=wid+1.67;
    document.getElementById('time').style.width=wid+'%'
    document.getElementById('time').style.display='block'
    i++;
    if(i==61)
    {disp(); }},1000);
}

function stopTimer()
{
    clearInterval(f);
}




