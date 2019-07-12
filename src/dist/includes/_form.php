<form class="leadForm" id="leadForm" method='POST'>
    <div class="form-group input-group">                            
        <input name="user[firstname]" class="form-control" placeholder="Nome" type="text" required>
        <input name="user[lastname]" class="form-control" placeholder="Sobrenome" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">                            
        <input name="user[email]" class="form-control" placeholder="E-mail" type="email" required>
        <input name="user[phone]" class="form-control celphone" placeholder="Telefone Celular" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <input name="user[cep]" id="cep" class="form-control cep" placeholder="CEP" type="text" >   
        <input name="user[cidade]" id="cidade" class="form-control" placeholder="Cidade" type="text" required>                          
        
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        
        <input class="form-control" name="user[rua]" id="rua" placeholder="Rua" type="text" required> 
        <input class="form-control" name="user[complemento]" id="complemento" placeholder="Complemento" type="text" > 
        
    </div> <!-- form-group end.// -->
    <div class="form-group input-group">                            
        <select id='uf' name="user[uf]" class="form-control" placeholder="Estado" required>
            <option value="">Estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
    </div> <!-- form-group end.// -->
    
    <div id="" class="retornoAjax"></div>                                                            
    <div class="form-group">
        <button type="submit" class="btn btn-dark btn-block btnEnviaForm">CADASTRAR</button>
    </div> <!-- form-group// -->      
    
    

</form>