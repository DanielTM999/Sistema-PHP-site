class script{
    constructor(param1, param2){
        this.senha = document.getElementById(param1);
        this.repsenha = document.getElementById(param2);
        this.err = document.querySelector('.err')
    }

    verefifSenha(){
        this.senha.addEventListener('change', () => {
            if(this.senha){
                if(this.senha.value == this.repsenha.value){
                    this.err.innerHTML = "";
                    var bnt = document.getElementById('bnt').disabled = false;
                }else{
                    this.err.innerHTML = "Senhas deferentes";
                    var bnt = document.getElementById('bnt').disabled = true;
                }
            }
        })

        this.repsenha.addEventListener('change', () => {
            if(this.repsenha){
                if(this.senha.value == this.repsenha.value){
                    this.err.innerHTML = "";
                    var bnt = document.getElementById('bnt').disabled = false;
                }else{
                    this.err.innerHTML = "Senhas deferentes";
                    var bnt = document.getElementById('bnt').disabled = true;
                }
            }
        })
    }
}

const auth = new script('Senhacad', 'repSenhacad');
auth.verefifSenha();