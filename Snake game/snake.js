function game() {
  document.getElementById("r").onclick = function() {mySnake();};
}

function mySnake() {
    const SIZE = 10;
    var elem = [document.getElementById("m0"), // array to store DOM 
                document.getElementById("m1"), // references for each div
	        document.getElementById("m2"), 
                document.getElementById("m3"),
		document.getElementById("m4"), 
                document.getElementById("m5"), 
                document.getElementById("m6"), 
                document.getElementById("m7"),
		document.getElementById("m8"), 
                document.getElementById("m9"), 
		document.getElementById("m10"), 
                document.getElementById("m11"),
		document.getElementById("m12"), 
                document.getElementById("m13"), 
		document.getElementById("m14"), 
                document.getElementById("m15")];  
    var x = [],
        y = [],
        dir =[],
        flag = [],
        count = 16,
        score = 0;
    
    initCoords();
    addBlock();
    var id = setInterval(slither, 10);
    

/*----------------------------------------------------------------------------*/
    function initCoords() {
        var i, j;

        for (i = 0, j = 16; i < count; i++, j--) {
            x[i] = j * SIZE;
            y[i] = 300;
            flag[i] = 0;
            dir[i] = "r";
        }
    }

/*----------------------------------------------------------------------------*/
    function slither() {
        if ((score++ % SIZE) == 0)
            addBlock(); 
        document.getElementById("r").onclick = function() {if (dir[0] != "l") dir[0] = "r";};
        document.getElementById("l").onclick = function() {if (dir[0] != "r") dir[0] = "l";};
        document.getElementById("d").onclick = function() {if (dir[0] != "u") dir[0] = "d";};
        document.getElementById("u").onclick = function() {if (dir[0] != "d") dir[0] = "u";};
        if (outOfBounds() || crash()) {
            clearInterval(id);
        } else {
            oneMove(0);
            for (var i = 1; i < count; i++) {
                if (dir[i] != dir[i-1]) {
                    flag[i]++;
                    if (flag[i] == 11) {
                        flag[i] = 0;
                        dir[i] = dir[i-1];
                    }
                }
                oneMove(i);
            } //end for
        } //end if
    } //end slither()

/*----------------------------------------------------------------------------*/
    function crash() {
        var vector = 0;
        
        switch (dir[0]) {
            case "r":
                vector = x[0] + SIZE;
                for (var i = 1; i < count; i++)
                    if (vector == x[i])
                        for (var j = 1-SIZE; j < SIZE; j++)
                            if ((y[0] + j) == y[i])
                                return true;
                break;
            case "l":
                vector = x[0] - SIZE;
                for (var i = 1; i < count; i++)
                    if (vector == x[i])
                        for (var j = 1-SIZE; j < SIZE; j++)
                            if ((y[0] + j) == y[i])
                                return true;     
                break;
            case "d":
                vector = y[0] + SIZE;  
                for (var i = 1; i < count; i++)
                    if (vector == y[i])
                        for (var j = 1-SIZE; j < SIZE; j++)
                            if ((x[0] + j) == x[i])
                                return true;       
                break;
            case "u":
                vector = y[0] - SIZE;  
                for (var i = 1; i < count; i++)
                    if (vector == y[i])
                        for (var j = 1-SIZE; j < SIZE; j++)
                            if ((x[0] + j) == x[i])
                                return true;             
                break;
            default:
        } //end switch
        
        return false;
    }

/*----------------------------------------------------------------------------*/
    function addBlock() {
        elem[count] = document.createElement("div");
        document.getElementById("gameBoard").appendChild(elem[count]);
        elem[count].style.position = "absolute";
        elem[count].style.width = SIZE + "px";
        elem[count].style.height = SIZE + "px";
        elem[count].style.background = "green";
        dir[count] = dir[count-1];
        flag[count] = 0;

        switch (dir[count-1]) {
            case "r":
                y[count] = y[count-1];
                x[count] = x[count-1] - SIZE;
                break;
            case "l":
                y[count] = y[count-1];
                x[count] = x[count-1] + SIZE;
                break;
            case "u":
                y[count] = y[count-1] + SIZE;
                x[count] = x[count-1];
                break;
            case "d":
                y[count] = y[count-1] - SIZE;
                x[count] = x[count-1];
                break;
            default:
        }
        elem[count].style.top = y[count] + "px";
        elem[count].style.left = x[count] + "px";
        count++;
        document.getElementById("score").innerHTML = score;
    }

/*----------------------------------------------------------------------------*/
    function oneMove(e) {
        switch (dir[e]) {
                    case "r":
                        x[e]++;
                        break;
                    case "l":
                        x[e]--;
                        break;
                    case "d":
                        y[e]++;
                        break;
                    case "u":
                        y[e]--;
                        break;
                    default:
                } //end switch
        elem[e].style.top = y[e] + 'px'; 
        elem[e].style.left = x[e] + 'px';
    } //end oneMove()

/*----------------------------------------------------------------------------*/
    function outOfBounds() {
        if(x[0] == 591 || y[0] == 591 || x[0] == -1 || y[0] == -1)
            return true;
        else
            return false;
    }


} //end mySnake()


<!-- --------------------------80 character gauge--------------------------- -->
