function mascaraTelefone(telefone) {
    telefone.value = telefone.value
        .replace(/\D/g, '')                // Remove qualquer caracter que não seja dígito
        .replace(/^(\d{2})(\d)/g, '($1) $2') // Adiciona parênteses em volta dos primeiros dois dígitos
        .replace(/(\d)(\d{4})$/, '$1-$2');    // Adiciona hífen entre o quarto e o quinto dígitos
}


// Função para buscar os states na API do IBGE
function buscarstates() {
    fetch('https://servicodados.ibge.gov.br/api/v1/localidades/states')
      .then(response => response.json())
      .then(data => {
        const statesSelect = document.getElementById('state');
        data.forEach(state => {
          const option = document.createElement('option');
          option.value = state.id;
          option.textContent = state.nome;
          statesSelect.appendChild(option);
        });
      })
      .catch(error => console.error('Erro ao buscar os states:', error));
  }

  // Função para buscar os states na API do IBGE
  function buscarstates() {
    fetch('https://servicodados.ibge.gov.br/api/v1/localidades/states')
      .then(response => response.json())
      .then(data => {
        const statesSelect = document.getElementById('states');
        data.forEach(state => {
          const option = document.createElement('option');
          option.value = state.id;
          option.textContent = state.nome;
          statesSelect.appendChild(option);
        });
      })
      .catch(error => console.error('Erro ao buscar os states:', error));
  }

  // Função para buscar os estados na API do IBGE
  function buscarEstados() {
    fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')
      .then(response => response.json())
      .then(data => {
        const estadosSelect = document.getElementById('estados');
        data.forEach(estado => {
          const option = document.createElement('option');
          option.value = estado.id;
          option.textContent = estado.nome;
          estadosSelect.appendChild(option);
        });
      })
      .catch(error => console.error('Erro ao buscar os estados:', error));
  }

  // Função para buscar as cidades de um estado selecionado
  function buscarCidades() {
    const estadoSelecionado = document.getElementById('estados').value;
    const cidadesSelect = document.getElementById('cidades');

    // Limpa o select de cidades
    cidadesSelect.innerHTML = '<option value="">Carregando...</option>';

    // Verifica se um estado foi selecionado
    if (estadoSelecionado) {
      fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSelecionado}/municipios`)
        .then(response => response.json())
        .then(data => {
          // Limpa o select de cidades
          cidadesSelect.innerHTML = '<option value="">Selecione uma cidade</option>';
          cidadesSelect.disabled = false; // Habilita o select de cidades

          // Adiciona as cidades do estado selecionado ao select
          data.forEach(cidade => {
            const option = document.createElement('option');
            option.value = cidade.id;
            option.textContent = cidade.nome;
            cidadesSelect.appendChild(option);
          });
        })
        .catch(error => console.error('Erro ao buscar as cidades:', error));
    } else {
      // Se nenhum estado foi selecionado, limpa o select de cidades e desabilita
      cidadesSelect.innerHTML = '<option value="">Selecione um estado primeiro</option>';
      cidadesSelect.disabled = true; // Desabilita o select de cidades
    }
  }

  // Ao carregar a página, buscar os estados
  document.addEventListener('DOMContentLoaded', () => {
    buscarEstados();
  });


  function showGraduate() {
    var selecionado = document.getElementById("graduate").value;
    var faculdadeDiv = document.getElementById("graduateDiv");

    if (selecionado === "graduate") {
        faculdadeDiv.style.display = "block";
    } else {
        faculdadeDiv.style.display = "none";
    }
}