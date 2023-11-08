function tentarConexao() {
    // Coloque aqui a lógica para tentar a conexão
    console.log("Tentativa de conexão...");
  
    // Se a tentativa de conexão for bem-sucedida, você pode redefinir o intervalo
    // e diminuir o tempo de espera entre as tentativas, por exemplo:
    retryInterval += 1000 * 60; // Adicione 1 minuto ao intervalo (em milissegundos)
  }
  
  let retryInterval = 20 * 60 * 1000; // 20 minutos em milissegundos (1 minuto = 60,000 ms)
  
  function iniciarTentativasDeConexao() {
    tentarConexao();
  
    if (retryInterval <= 0) {
      console.log("Conexão bem-sucedida!");
    } else {
      setTimeout(iniciarTentativasDeConexao, retryInterval);
    }
  }
  
  iniciarTentativasDeConexao();
  