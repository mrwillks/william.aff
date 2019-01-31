<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="javascriptpersonalizado.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8" />
    <title></title>
    <style>
            body{
            font-family: roboto, sans-serif;
            margin-top:0%;
            margin-left:0px;
            margin-right:0px;
        background-color: #333333;

            }
                    .cabecalho{
                    background-color: black;
                    width:100%;
                    height:200px;

                    }
                            .titulo{
                            margin-left: 30%;
                            margin-right: 30%;
                            color:white;
                            width:40%;
                            height:100%;
                            font-size:50px;
                            text-align:center;
                            line-height:200px;
                            }
                    .campo-cadastro{
                            background-color:#d9d9d9;
                            width:50%;
                            height: 150px;
                            border-radius:5px;
                            margin-top: 5px;
                            margin-left:25%;
                            margin-right:25%;
                            }
                   .campo-botoes{
                            width:50%;
                            height: 500px;
                            border-radius:5px;
                            margin-top: 5px;
                            margin-left:25%;
                            margin-right:25%;
                            background-color:white;
							background-color:#d9d9d9;
					
                    }
                    .label{
                    margin-top:3px;
                    margin-left:3px;
                    height:5px;
                    color:#666666;
                    width:50%;
                    float:left;
                    font-family:roboto;
                    font-weight:10px;
                    font-weight:bolder;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;

                    }
                    .campo-texto{
                    margin-top:3px;
                    margin-left:3px;
                    float:left;
                    height:40px;
                    width:100%;
                    background-color: #bfbfbf;
                    border-style:none;
                    font-family:roboto;
                    font-size:30px;
                    border-radius:10px;
                    border-bottom:6px solid;
                    border-bottom-color:#333333;
                     }
                    .campo-funcoes{
                    border-style:none;
                    float:left;
                    height:40px;
                    width:100%;
                    background-color:  #bfbfbf;
                    margin-left: 3px;
                    margin-top:15px;
                    border-radius:10px;
                    border-bottom:6px solid;
                    border-color:#333333;
                    font-size:30px;
                    font-family:roboto;
                    }
                    .divisor-campos{
                    float:left;
                    width:50%;
                    height:100%;
                    }
                    .divisor-botoes{
                    float:right;
                    width:49%;
                    height:150px;
                    }
                    .botao{
                    margin-top:3px;
                    margin-left:3px;
                    width:47%;
                    height:97%;
                    background:none;
                    border-color:#a9fd68;
                    float: left;
                    border-radius:5px;
                    border:3px solid #025109;
                    font-family:roboto;
                    font-size:30px;
                    color:#025109;
                       }
                     .botao-limpar{
                    margin-top:3px;
                    margin-left:3px;
                    width:47%;
                    height:97%;
                    background:none;
                    border-color:#530000;
                    float: left;
                    border-radius:5px;
                    border:3px solid #530000;
                    font-family:roboto;
                    font-size:30px;
                    color:#530000;
                       }
  
					 .campo-busca{
                    margin-top:3px;
                    margin-left:3px;
                    float:left;
                    height:40px;
                    width:99%;
                    background-color: #bfbfbf;
                    border-style:none;
                    font-family:roboto;
                    font-size:30px;
                    border-radius:10px;
                    border-bottom:6px solid;
                    border-bottom-color:#333333;
}
.botao-salvar{
                    margin-top:3px;
                    margin-right:3px;
                    width:29%;
                    height:46px;
                    background:none;
                    border-color:#a9fd68;
                    float: right;
                    border-radius:5px;
                    border:3px solid #025109;
                    font-family:roboto;
                    font-size:30px;
                    color:#025109;
                       }

@keyframes teste{
	from{margin-top:0px;}
}
.dado{
	width:100%;
	height:50px;
	background-color:	 #8a8a8a;
	list-style-type:none;
	float:left;
	margin-left:0px;
	border-radius:10px;
	margin-top:3px;
	animation-name: teste;
	animation-duration:0.2s;
	position:relative;
	display:block;
}
.resultado{
	margin-left:0px;
	width:100%;
	height:100px;
	margin-top:3px;
	float:left;
}
.dado-nome{
padding-left:3px;
padding-right:3px;
margin-top:3px;
min-width: 50px;
max-width: 500px;
margin-left:5px;
height:25x;
float:left;
font-family:roboto;
color:black;
background-color: #6db9ce;
}
.dado-cargo{
border-radius:3px;
margin-top:3px;
margin-left:3px;
min-width: 70px;
max-width: 500px;
padding-left:3px;
padding-right:3px;
height:25x;
float:left;
font-family:roboto;
color:black;
background-color:#e5b629;
}
.container-dados-usuario{
	width:50%;
	height:100%;
}
.container-nc{
	height:25px;
}
.container-vl{
	height:25px;
	width:100%;
	float:left;
}
.dado-valores{
min-width: 50px;
max-width: 500px;
border-left:3px solid;
border-left-color:#f2f2f2;
color:#f2f2f2;
font-family:roboto;
float:left;
margin-left:6px;
padding-left:3px;
padding-right:3px;

}
    </style>
</head>
<body>
    <div class="cabecalho">
        <div class="titulo">
            CADASTRO GC
        </div>
    </div>
    <div class="campo-cadastro">
                                       <form method="post" action="processa.php">
                                           <div class="divisor-campos">
                                               <span class="label">NICK</span><br />
                                               <input type="text" name="nick" class="campo-texto" /><br /><br />
                                               <span class="label">FUNÇÃO</span>
                                               <input name="cargo" list="funcoes" class="campo-funcoes" />
                                               <datalist id="funcoes">
                                                   <option value="ADM">
                                                   <option value="HOST">
                                                   <option value="HOST-FREE">
                                                   <option value="ADM-FREE">
                                               </datalist>
                                           </div>
                                           <div class="divisor-botoes">
                                               <input type="submit" value="salvar" class="botao" />
                                               <input type="reset" value="limpar" class="botao-limpar" />
                                           </div>
                                       </form>
    </div>
    <div class="campo-botoes">
         <h1>Pesquisar hosts</h1>
		<form method="POST" id="form-pesquisa" action="">
			<input type="text" name="pesquisa" id="pesquisa" class="campo-busca" placeholder="O que você está procurando?">
		</form>
		<div class="resultado">
		</div>
    </div>

</body>
</html>