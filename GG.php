<!DOCTYPE html>
<html>
    <head>
        <title> Pramewit </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="BootStrap/css/bootstrap.min.css">
        <style>
        .Hey{
            font-family:Arial, Helvetica, sans-serif;
            font-size: 50pt;
            font-weight: 100pt;
            color: greenyellow
        }
        
        .Horrizon{
            font-family:Arial, Helvetica, sans-serif;
            font-size: 20pt;
            font-size: 30pt;
            color: aquamarine
        }

        </style>
        <script src="js/jquery.js">
        </script>
        <script>
        $(function(){
            $("#other").hide();
        });

        function showOther(){
            if ($('#otherSwitch').is(':checked')) {
            $("#other").show();
            }else{
            $("#other").hide();

            }
        }
        </script>
    </head>

    
    <body bgcolor="">
<form align="left" method="POST" action="">
    <fieldset> 
       <legend> <h1>Rgister OWT</h1> </legend>
       <table width="0" border="0" align="center">
            <hr>
        <tr>   
            <td>    
        Name :
            </td>
            <td>
  <br>  <input type="text" id="Username"name="Username"value="" placeholder="Name" required>
    <input type="text" id="surname"name="surname"value="" placeholder="Surname" required>
            </td>
        </tr>
        <tr>
            <td>
     Password :
            </td>
            <td>
    <input type="password" id="password"value="***" name="password" placeholder="password" required>
            </td>
            
        </tr>
        <tr>
                <td>
    Age :
                </td>
                <td>
    <input type="number" id="Age"name="Age"value="15" placeholder="Age" min="1" max="3000" required>             
                </td>
                
            </tr>
            <tr>
                    <td>
    Email :           
                    </td>
                    <td>
     <input type="email" id="email"name="email"value="xxx@gmail.com" placeholder="Local" minlength="3" maxlength="30" required>                      
                    </td>
                    
                </tr>
                <tr>
                        <td>
    Gender :               
                        </td>
                        <td>
    <br><input type="radio" id="radio"name="radio" value="" placeholder="radio" checked>Male
    <br><input type="radio" id="radio"name="radio" value="" placeholder="radio" checked>Female
                                <hr>   
                        </td>
                        
                    </tr>
                <tr>
                    <td>
    Birthday
                    </td>
                    <td>
                        <hr>
    <input type="date" id="date"name="date" value="2000-01-01"  required>
                    </td>
                </tr>   
                <tr>
                    <td>
    Address :                        
                    </td>
                    <td>
    <textarea rows="4" cols="50" aria-valuemex="100"></textarea>
                    </td>
                </tr> 
                <tr>

                    <td>
    Travel :                  
                    </td>
                    <td>
                            <hr>
    <input type="checkbox" name="comeby" value="Daycar"  >ö��Шӷҧ
    <br><input type="checkbox" name="comeby" value="Walk"  >ö��ǹ���
    <br><input type="checkbox" name="comeby" value="Walk"  >�Թ�ҧ���
                            <hr>
                    </td>
                </tr>
                <tr>
                    <td>
    Renge Travel :
                    </td>
                    <td>
    0<input type="range">100
    <hr>
                    </td>
                </tr>
                <tr>
                    <td>
    �Ң� :                    
                    </td>
                    <td>
    <br><select name="Major">
            <option value="3901">"෤��������ʹ��</option>
            <option value="3902">"�����������áԨ</option>
            <option value="3901">"�Ũ�ʵԡ��</option>
            <option value="3902">"��úѭ��</option>
            <option value="3901">"��õ�Ҵ</option>
            <option value="3902">"����ç���</option>
            <option value="3901">"���ҵ�ҧ�����</option>
            <option value="3902">"��һ�ա</option>
                                </select>
                                <hr>
                    </td>
                </tr>
                <tr>
                    <td>
��������ö����� :
                    </td>
                    <td>
                            <input type="checkbox" name="Sport" value="Sport"  >����
                            <br><input type="checkbox" name="Academic" value="Academic"  >�Ԫҡ��
                            <br><input type="checkbox" name="Language" value="Language"  >����
                            <br><input type="checkbox" id="otherSwitch" name="comeby" value="Walk"  onClick="showOther();"> ���� 
                              <input id="other" type="text" placeholder="����">
                           
                    </td>
                </tr>
    </table>

    <br><br><input type="submit" value="��">
    <input type="reset" value="�׹���">
    
</fieldset>
</form>
    </body>
</html>