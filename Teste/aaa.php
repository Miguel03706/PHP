<label> Nome do estabelecimento *
         [text* Nomedoestabelecimento]
     </label>

     <label> CNPJ *
    
     </label>

     <label> Cidade *
         [text* Cidade]
     </label>

     <label> Estado *
          [select* menu-432 include_blank "AC" "AL" "AP" "AM" "BA" "CE" "ES" "GO" "MA" "MT" "MS" "MG" "PA" "PB" "PR" "PE" "PI" "RJ" "RN" "RS" "RO" "RR" "SC" "SP" "SE" "TO" "DF"]
     </label>

     <label> CEP *
        [number* CEP min:9999999 max:99999999]
     </label>

     <label> Endereço *
        [text* Endereco]
     </label>

     <label> Bairro *
     [text* Bairro] 
     </label>

     <label> Nome do responsável *
        [text* your-name] 
     </label>

     <label> Telefone *
     [number* Telefone min:9999999999 max:99999999999 "(xx) xxxxx-xxxx"]
     </label>

     <label> Seu e-mail *
        [email* your-email] 
     </label>

      <label> Formato jurídico *
     [radio Formatojuridico default:1 "MEI - MICRO EMPREENDEDOR INDIVIDUAL" "ME - EMPRESARIO INDIVIDUAL" "EIRELI" "SOCIEDADE LIMITADA" "SOCIEDADE ANÔNIMA"]
 

     <label> Tipo de estabelecimento *
     [radio Tipo_estabelecimento default:1 "Mercado" "Farmácia" "Outros"]




     data-ls-module="charCounter" maxlength="20"

     <label> CEP *
     <input type="number" data-ls-module="charCounter" maxlength="8" minlength="8" required>
     </label>

     <label> Telefone *
     [number* Telefone min:9999999999 max:99999999999 "(xx) xxxxx-xxxx"]
     </label>

     <label> CNPJ *
     [number* Telefone min:9999999999 max:99999999999 "(xx) xxxxx-xxxx"]
     </label>
     [submit "Enviar"]