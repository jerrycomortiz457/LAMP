class Player {
    type:number;
    player_id?:number;
    x:number;
    y:number;

    constructor(player_type: number, player_id:number){
        if(player_type == 1){
            this.x = 470;
            this.y = 250;
        }
        else{
            this.x = 0;
            this.y = Math.floor((Math.random() * 470) + 1);
            this.player_id = player_id
        }

        this.type = player_type;
    }
}

var bullets : any = {};

class Bullet{
    id: number;
    x: number;
    y: number;

    constructor(player_x: number, player_y: number){
        let date = new Date();
        this.x = player_x;
        this.y = player_y;
        this.id = date.getTime();
    }
}

move_play(new Player(1, 1));

var enemies : any = {};

setInterval(() => {
    let date = new Date();
    let date_stamp = date.getTime();
    let enemy = new Player(2, date.getTime());
    move_play(enemy);
    enemies[date_stamp] = enemy;
}, 1000);


function move_play(player: Player){
    const element = document.createElement("div");
    element.setAttribute((player.type == 1 ? "id" : "class"), (player.type == 1 ? "hero" : "enemy"));
    element.setAttribute((player.type != 1 ? "id" : "class"), (player.type != 1 ? "enemy_"+player.player_id : "hero"));
    element.setAttribute("style", "top:"+player.x+"px; left:"+player.y+"px;");
    const append_element: HTMLElement | null = document.getElementById("container");

    if(append_element != null){
        append_element.appendChild(element);
    }
    
    const player_element : HTMLElement | null = document.getElementById("hero");
    if(player.type == 1){
        document.onkeydown = function(e){
            if(player_element != null && append_element != null){
                if(e.keyCode == 32){
                    var player_bullet = new Bullet(player.x, player.y);
                    bullets[player_bullet.id] = player_bullet;
                    const bullet_elem = document.createElement("div");
                    bullet_elem.setAttribute("id", "bullet_"+ player_bullet.id);
                    bullet_elem.setAttribute("class", "bullet");
                    bullet_elem.setAttribute("style", "top:"+player.x+"px; left:"+(player.y + 5)+"px;");
                    
                    if(append_element != null){
                        append_element.appendChild(bullet_elem);
                    }

                    setInterval(() => {
                        const bullet_element : HTMLElement | null = document.getElementById("bullet_"+player_bullet.id);
                        if(bullet_element != null){
                            if(player_bullet.x != 0) {
                                player_bullet.x -= 10;
                                bullet_element.setAttribute("style", "top:"+player_bullet.x+"px; left:"+(player_bullet.y+ 5)+"px;");   
                                for(var enemy in enemies){
                                    for(var bullet in bullets){
                                        if (
                                            bullets[bullet] != undefined && enemies[enemy] != undefined &&
                                            bullets[bullet].x < enemies[enemy].x + 20 && bullets[bullet].x + 10 > enemies[enemy].x && bullets[bullet].y < enemies[enemy].y + 20 && 10 + bullets[bullet].y > enemies[enemy].y
                                        ) {
                                            var elem_bullet = document.getElementById("bullet_"+bullets[bullet].id);
                                            var elem_enemy = document.getElementById("enemy_"+enemies[enemy].player_id);

                                            delete enemies[enemy];
                                            delete bullets[bullet];

                                            if(elem_enemy != null){
                                                elem_enemy.setAttribute("class", "explode");
                                                setTimeout(function(){
                                                    if(elem_enemy != null){
                                                        elem_enemy.remove();
                                                    }                                              
                                                }, 100);
                                            }

                                            if(elem_bullet != null){
                                                elem_bullet.remove();
                                            }
                                        }
                                    };
                                };
                            }
                            else{
                                bullet_element.remove(); 
                                delete bullets[player_bullet.id];
                            }
                        } 
                    }, 100)
                }

                if(e.keyCode == 37){
                    if(player.y != 0){
                        player.y -= 10;
                    }
                } 
                else if(e.keyCode == 39){
                    if(player.y != (append_element.offsetWidth - player_element.offsetWidth)){
                        player.y += 10;
                    }
                }
                else if(e.keyCode == 38){
                    if(player.x != 0){
                        player.x -= 10;
                    } 
                } 
                else if(e.keyCode == 40){
                    if(player.x != (append_element.offsetHeight - player_element.offsetHeight)){
                        player.x += 10;
                    }
                }

                player_element.setAttribute("style", "top:"+player.x+"px; left:"+player.y+"px;");   
            }
        }
    }
    else{
        const enemy_element : HTMLElement | null = document.getElementById("enemy_"+player.player_id);        
        
        var timer = setInterval(() => {
            if(enemy_element != null && append_element != null){
                if(player.x != ((append_element.offsetHeight - 50) + enemy_element.offsetHeight)){
                    player.x += 10;
                    enemy_element.setAttribute("style", "top:"+player.x+"px; left:"+player.y+"px;");

                    if(player_element != null){
                        if(player_element.style.top != null && player_element.style.left != null){
                            let player_x = parseInt(player_element.style.top.replace("px", ""));
                            let player_y = parseInt(player_element.style.left.replace("px", ""));                           

                            if (player.x < player_x + 10 && player.x + 10 > player_x && player.y < player_y + 20 && 20 + player.y > player_y) {
                                enemy_element.remove();
                                player_element.remove();
                                alert("GAME OVER");
                                clearInterval(timer)
                                location.reload();
                            }
                        }
                    } 
                }
                else{
                    if(player.player_id != null){
                        enemy_element.remove();
                        delete enemies[player.player_id];
                    }
                }
            }
        }, 100);
    }
}
 


