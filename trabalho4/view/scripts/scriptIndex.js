$(document).ready(function(){
    $("buttonCalendar").click(function(){
        $(".contents").load("calendar.php");
    });
});//ok

$(document).ready(function(){
    $("buttonList").click(function(){
        $(".contents").load("todolist.php");
    });
});//ok

$(document).ready(function(){
    $("buttonKanban").click(function(){
        $(".contents").load("kanban.php");
    });
});//ok

$(document).ready(function(){
    $("buttonClients").click(function(){
        $(".contents").load("clients.htm");
    });
});//ok

$(document).ready(function(){
    $("buttonChat").click(function(){
        $(".contents").load("pageChat.htm");
    });
});//ok

$(document).ready(function(){
    $("buttonCloud").click(function(){
        $(".contents").load("pageCloud.htm");
    });
});//ok

$(document).ready(function(){
    $("buttonIdea").click(function(){
        $(".contents").load("pageIdea.htm");
    });
});//ok

$(document).ready(function(){
    $("buttonNotes").click(function(){
        $(".contents").load("pageNotes.htm");
    });
});//ok

$(document).ready(function(){
    $("buttonPuzzle").click(function(){
        $(".contents").load("puzzle.php");
    });
});//ok
