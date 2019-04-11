
         <h2>Регистрация</h2>            
            <form  method="post" id="contactForm" action="admin_regis.php" data-toggle="validator">
              
                
                    <label for="name" class="h4">Введите ваш логин</label>

                    <input type="text" name="username" class="form-control validate" id="name" required data-error="NEW ERROR MESSAGE">
                
                
                
                    <label for="tel" class="h4">Введите ваш пароль</label>
                    <input type="password" name="password1" class="form-control validate" id="tel"  required>                
              
              
                    <label for="message" class="h4 ">Введите ваш пароль еще раз</label>
                     <input type="password" name="password2" class="form-control validate" id="tel"  required>
        
                    <button class="btn waves-effect waves-light grey darken-4" type="submit" name="submit" value="submit"style="float: right;">Регистрация
    <i class="material-icons right">mouse</i>
  </button>  
  </form>    
