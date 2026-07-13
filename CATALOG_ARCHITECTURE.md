# Arquitetura de Catálogo Bom Ar E-commerce

Este documento define a arquitetura oficial do catálogo do e-commerce da Bom Ar Condicionado. Ele orienta categorias, taxonomias, filtros, URLs, breadcrumbs, páginas estratégicas, SEO, busca e Central de Climatização, sem implementar código.

## 1. Princípios da arquitetura

- A venda de equipamentos é nacional e deve ser a prioridade da navegação.
- Goiás e Distrito Federal são mercados comerciais prioritários, mas páginas nacionais não devem receber termos locais automaticamente.
- Serviços de instalação e limpeza são restritos a Goiânia e Região Metropolitana e não fazem parte da árvore principal de venda nacional de equipamentos.
- A compra direta deve permanecer rápida; filtros, guias e ferramentas consultivas são apoios opcionais.
- A arquitetura deve favorecer descoberta por produto, BTU, ambiente, marca, tipo de equipamento, objetivo de uso e intenção de busca.
- URLs devem ser curtas, legíveis, estáveis e sem indexação indiscriminada de combinações de filtros.
- Conteúdo útil e decisões de compra devem aparecer antes de blocos extensos de SEO.

## 2. Regras comerciais oficiais da Bom Ar

- Venda de equipamentos para todo o Brasil.
- Instalação apenas para Goiânia e Região Metropolitana.
- Limpeza apenas para Goiânia e Região Metropolitana.
- Não oferecer PMOC.
- Não oferecer manutenção corretiva.
- A restrição geográfica de serviços deve aparecer antes de formulários, contratação ou promessa de disponibilidade.

## 3. Estrutura completa de categorias

A estrutura principal do WooCommerce deve separar categorias compráveis de páginas editoriais, ferramentas e páginas institucionais.

### 3.1 Categoria raiz de equipamentos

- **Ar-condicionado** (`/ar-condicionado/`)
  - Split Hi Wall
  - Split Inverter
  - Split Convencional
  - Multi Split
  - Piso Teto
  - Cassete
  - Janela
  - Portátil
  - Cortina de Ar
  - Acessórios para Ar-condicionado

### 3.2 Categorias estratégicas derivadas

Estas páginas podem existir como landing pages indexáveis quando tiverem conteúdo e sortimento suficientes, mas não precisam ser subcategorias físicas duplicadas no WooCommerce.

- Ar-condicionado por BTUs
- Ar-condicionado por ambiente
- Ar-condicionado por marca
- Ar-condicionado por ciclo
- Ar-condicionado por tensão
- Ar-condicionado por tecnologia
- Ar-condicionado por objetivo de uso

### 3.3 Categorias de serviços locais

Serviços não devem competir com categorias nacionais de equipamentos.

- **Serviços de Climatização** (`/servicos/`)
  - Instalação de ar-condicionado em Goiânia e Região Metropolitana
  - Limpeza de ar-condicionado em Goiânia e Região Metropolitana

Regras:

- Não criar páginas de serviço para cidades sem operação real.
- Não incluir PMOC, manutenção corretiva ou serviços não prestados.
- Informar a restrição geográfica antes de qualquer formulário ou CTA de contratação.

## 4. Estrutura por BTUs

BTU deve funcionar como atributo filtrável, página estratégica e entrada de navegação no mega menu.

### 4.1 Faixas principais

- 7.000 BTUs
- 9.000 BTUs
- 12.000 BTUs
- 18.000 BTUs
- 22.000 BTUs
- 24.000 BTUs
- 30.000 BTUs
- 36.000 BTUs
- 48.000 BTUs
- 60.000 BTUs

### 4.2 Agrupamentos de capacidade

- Pequenos ambientes: até 9.000 BTUs
- Ambientes médios: 12.000 a 18.000 BTUs
- Ambientes grandes: 22.000 a 30.000 BTUs
- Ambientes comerciais ou amplos: 36.000 BTUs ou mais

### 4.3 URLs recomendadas por BTU

- `/ar-condicionado/9000-btus/`
- `/ar-condicionado/12000-btus/`
- `/ar-condicionado/18000-btus/`
- `/ar-condicionado/24000-btus/`

Combinações estratégicas podem existir quando houver demanda e conteúdo útil:

- `/ar-condicionado/split-inverter-12000-btus/`
- `/ar-condicionado/12000-btus/quarto/`
- `/ar-condicionado/12000-btus/lg/`

## 5. Estrutura por ambientes

Ambiente deve ajudar clientes que não conhecem capacidade, tecnologia ou tipo ideal.

### 5.1 Ambientes residenciais

- Quarto
- Sala
- Cozinha
- Home office
- Apartamento
- Casa
- Suíte
- Varanda gourmet fechada

### 5.2 Ambientes comerciais

- Escritório
- Loja
- Consultório
- Clínica
- Restaurante
- Sala comercial
- Academia
- Escola ou sala de aula
- Hotelaria

### 5.3 URLs por ambiente

- `/ambiente/quarto/`
- `/ambiente/sala/`
- `/ambiente/escritorio/`
- `/ambiente/loja/`

Páginas por ambiente devem explicar critérios de escolha, sugerir faixas de BTU e exibir produtos compatíveis sem bloquear a compra direta.

## 6. Estrutura por marcas

Marca deve ser uma taxonomia indexável, com páginas fortes para marcas com sortimento e busca suficientes.

### 6.1 Marcas prioritárias

- LG
- Samsung
- Midea
- Gree
- Daikin
- Fujitsu
- Springer Midea
- Elgin
- Philco
- Agratto
- TCL
- Consul
- Electrolux

### 6.2 URLs por marca

- `/marca/lg/`
- `/marca/samsung/`
- `/marca/midea/`
- `/marca/gree/`

Combinações estratégicas:

- `/marca/lg/ar-condicionado-inverter/`
- `/marca/samsung/12000-btus/`
- `/marca/midea/quarto/`

## 7. Estrutura por tipo de equipamento

Tipo de equipamento deve ser categoria comprável quando representar famílias de produtos com comportamento, aplicação e decisão de compra distintos.

- Split Hi Wall: padrão residencial e pequenos comerciais.
- Split Inverter: foco em economia, conforto térmico e menor variação de temperatura.
- Split Convencional: opção quando houver disponibilidade comercial.
- Multi Split: múltiplos ambientes com uma condensadora.
- Piso Teto: ambientes comerciais, salas amplas e locais com maior carga térmica.
- Cassete: ambientes comerciais com forro e distribuição centralizada.
- Janela: reposição ou instalação simplificada em nichos existentes.
- Portátil: uso eventual ou imóveis com restrição de instalação.
- Cortina de Ar: separação térmica em portas e entradas comerciais.
- Acessórios: itens complementares, sem misturar com equipamentos principais.

## 8. Estrutura por objetivo de uso

Objetivos de uso devem funcionar como páginas consultivas e filtros editoriais, não como obstáculos para comprar.

- Economizar energia
- Climatizar quarto pequeno
- Climatizar sala grande
- Comprar ar-condicionado silencioso
- Comprar ar-condicionado para comércio
- Substituir ar-condicionado antigo
- Comprar ar-condicionado para apartamento
- Comprar ar-condicionado para uso intenso
- Encontrar melhor custo-benefício
- Escolher ar-condicionado com instalação local

URLs recomendadas:

- `/objetivo/economizar-energia/`
- `/objetivo/ar-condicionado-silencioso/`
- `/objetivo/ar-condicionado-para-comercio/`

## 9. Estrutura para SEO

### 9.1 Tipos de página indexável

- Categorias principais de equipamento.
- Páginas por BTU com volume de busca e produtos suficientes.
- Páginas de marca com sortimento real.
- Páginas por ambiente com orientação útil.
- Páginas por objetivo com intenção comercial clara.
- Guias da Central de Climatização.
- Páginas regionais somente quando houver operação, conteúdo e oferta reais.

### 9.2 Tipos de página não indexável por padrão

- Combinações arbitrárias de filtros.
- Resultados de busca interna.
- Ordenações, paginações e parâmetros sem valor único.
- Filtros temporários de preço, estoque, promoção ou entrega.
- Páginas vazias ou com poucos produtos.

### 9.3 Conteúdo mínimo para páginas estratégicas

- H1 único e claro.
- Descrição curta acima da lista, focada em decisão de compra.
- Produtos ou categorias relacionadas visíveis cedo.
- Bloco de orientação útil abaixo da listagem.
- FAQ real quando houver dúvidas frequentes.
- BreadcrumbList quando tecnicamente implementado.
- Product e Offer somente em produtos com dados válidos.

### 9.4 SEO técnico

- Canonical: páginas principais devem apontar para a própria URL canônica; filtros não indexáveis devem apontar para a categoria base ou combinação indexável equivalente.
- Robots: páginas sem valor único, resultados de busca interna e combinações arbitrárias de filtros devem usar `noindex,follow` quando expostas.
- Paginação: páginas paginadas devem manter acesso rastreável aos produtos e evitar canonical incorreto para a primeira página quando a listagem paginada tiver conteúdo próprio.
- Product Schema: usar somente em páginas de produto com nome, imagem, SKU quando disponível, preço, disponibilidade e oferta reais.
- FAQ Schema: usar somente quando houver perguntas e respostas visíveis na página e realmente úteis ao usuário.
- Breadcrumb Schema: refletir exatamente o breadcrumb visível e a hierarquia oficial da página.
- Organization Schema: usar dados reais da Bom Ar, sem marcar integrações, avaliações ou contatos não validados.

### 9.5 Facetas indexáveis e não indexáveis

Facetas só devem gerar páginas indexáveis quando representarem intenção de busca clara, conteúdo útil e sortimento suficiente.

Indexáveis por padrão estratégico:

- Marca
- BTU
- Tipo
- Ambiente
- Objetivo

Não indexáveis por padrão:

- Voltagem
- Cor
- Disponibilidade
- Faixa de preço
- Recursos opcionais
- Ordenação
- Promoção temporária
- Estoque
- Combinações com poucos produtos

Combinações de facetas só devem ser indexadas quando forem páginas planejadas, com URL amigável, conteúdo próprio, produtos suficientes e valor real para SEO.

## 10. Taxonomias

### 10.1 Taxonomias principais

- Categoria de produto
- Marca
- BTU
- Ambiente
- Tipo de equipamento
- Objetivo de uso
- Ciclo
- Tecnologia
- Tensão
- Classificação energética
- Gás refrigerante
- Recursos

### 10.2 Taxonomias auxiliares

- Área recomendada
- Nível de ruído
- Garantia
- Voltagem regional disponível
- Disponibilidade de instalação local
- Linha ou família do fabricante
- Compatibilidade com automação ou Wi-Fi

## 11. Atributos dos produtos

Atributos devem ser padronizados para filtros, comparação, busca e integração futura.

### 11.1 Atributos comerciais

- Nome comercial
- Marca
- Modelo/SKU
- Preço
- Preço promocional
- Parcelamento
- Estoque
- Prazo de entrega
- Garantia
- Selo de destaque comercial

### 11.2 Atributos técnicos

- Capacidade em BTUs
- Tipo de equipamento
- Tecnologia inverter ou convencional
- Ciclo frio ou quente/frio
- Tensão: 127V, 220V ou bivolt quando aplicável
- Fase quando aplicável
- Classificação energética
- Consumo aproximado
- Gás refrigerante
- Vazão de ar
- Nível de ruído da evaporadora
- Dimensões da evaporadora
- Dimensões da condensadora
- Peso da evaporadora
- Peso da condensadora
- Área recomendada
- Serpentina
- Compressor

### 11.3 Atributos de experiência

- Wi-Fi
- Controle por aplicativo
- Compatibilidade com assistentes de voz
- Função dormir
- Modo turbo
- Filtro antibactéria ou similar
- Autolimpeza
- Desumidificação
- Display invisível ou apagável
- Direcionamento de ar
- Baixo ruído

### 11.4 Atributos operacionais

- Produto elegível para instalação local
- Cobertura de instalação: Goiânia e Região Metropolitana
- Necessita avaliação técnica
- Disponibilidade para retirada quando aplicável
- Prazo especial ou sob encomenda

## 12. Filtros

### 12.1 Filtros globais de categoria

- Disponibilidade/estoque
- Preço
- Marca
- BTUs
- Tipo de equipamento
- Tecnologia
- Ciclo
- Tensão
- Classificação energética
- Ambiente recomendado
- Recursos
- Nível de ruído
- Gás refrigerante
- Instalação local disponível

### 12.2 Filtros por contexto

- Categoria por BTU: marca, preço, tipo, tecnologia, ciclo e tensão.
- Categoria por marca: BTU, tipo, preço, tecnologia, ciclo e tensão.
- Categoria por ambiente: BTU recomendado, preço, marca, tipo, tecnologia e ruído.
- Categoria por objetivo: atributo relacionado ao objetivo, preço, BTU, marca e tipo.
- Busca: disponibilidade, categoria, marca, BTU, preço, tipo, tecnologia e tensão.

## 13. Ordem de prioridade dos filtros

### 13.1 Ordem padrão

1. Disponibilidade
2. Preço
3. Marca
4. BTUs
5. Tipo de equipamento
6. Tecnologia
7. Ciclo
8. Tensão
9. Ambiente recomendado
10. Classificação energética
11. Recursos
12. Nível de ruído
13. Gás refrigerante
14. Instalação local disponível

### 13.2 Regras de UX para filtros

- No mobile, filtros devem abrir em drawer.
- Filtros aplicados devem aparecer como chips removíveis.
- A aplicação deve ser rápida e com feedback claro.
- Não esconder produtos por perguntas obrigatórias.
- Combinações sem resultado devem sugerir alternativas úteis.
- Filtros técnicos avançados devem ficar depois dos filtros comerciais mais usados.

## 14. Estrutura oficial de URLs, nomenclatura e breadcrumbs

### 14.1 URLs oficiais

A estrutura oficial de URLs deve ser simples, estável e orientada por intenção de compra ou consulta:

- Categoria principal: `/ar-condicionado/`
- Tipo de equipamento: `/ar-condicionado/split-inverter/`
- BTUs: `/ar-condicionado/9000-btus/`
- Marca: `/marca/{marca}/`
- Ambiente: `/ambiente/{ambiente}/`
- Objetivo: `/objetivo/{objetivo}/`
- Guia: `/guia/{assunto}/`

### 14.2 Regras de nomenclatura

- Usar termos em português, claros para o cliente e consistentes com a busca interna.
- Usar nomes comerciais conhecidos quando forem mais claros que termos técnicos.
- Padronizar capacidades como `{capacidade}-btus`, sem pontos no slug.
- Padronizar marca em slug limpo, sem sufixos comerciais temporários.
- Usar singular para bases conceituais: `/marca/`, `/ambiente/`, `/objetivo/` e `/guia/`.
- Evitar nomes de campanha, preço, estoque, condição temporária ou promessa não comprovada.
- Não usar “Goiânia” em páginas nacionais; termos locais só devem aparecer em páginas de serviço ou páginas regionais reais.

### 14.3 Regras de URLs amigáveis

- Usar minúsculas, hífens e caracteres ASCII sempre que possível.
- Manter URLs curtas, legíveis e permanentes.
- Evitar mais de dois níveis de profundidade em páginas comerciais.
- Evitar parâmetros indexáveis para filtros comuns.
- Criar redirecionamentos 301 quando uma URL permanente precisar mudar.
- Não criar URLs indexáveis para combinações sem sortimento, conteúdo útil ou demanda real.

### 14.4 Breadcrumbs por tipo de URL

- `/ar-condicionado/`: `Início > Ar-condicionado`
- `/ar-condicionado/split-inverter/`: `Início > Ar-condicionado > Split Inverter`
- `/ar-condicionado/9000-btus/`: `Início > Ar-condicionado > 9000 BTUs`
- `/marca/lg/`: `Início > Marca > LG`
- `/ambiente/quarto/`: `Início > Ambiente > Quarto`
- `/objetivo/economizar-energia/`: `Início > Objetivo > Economizar energia`
- `/guia/como-calcular-btus/`: `Início > Guia > Como calcular BTUs`

## 15. Breadcrumbs

### 15.1 Produto

`Início > Ar-condicionado > Split Inverter > Ar-condicionado LG Dual Inverter 12000 BTUs`

### 15.2 Categoria por BTU

`Início > Ar-condicionado > 12000 BTUs`

### 15.3 Marca

`Início > Marcas > LG`

### 15.4 Ambiente

`Início > Ambientes > Quarto`

### 15.5 Central de Climatização

`Início > Central de Climatização > Guia de BTUs`

### 15.6 Serviço local

`Início > Serviços > Instalação de ar-condicionado em Goiânia e Região Metropolitana`

## 16. Relacionamentos entre categorias

### 16.1 Relacionamentos principais

- BTU se relaciona com ambiente, área recomendada e objetivo.
- Marca se relaciona com linhas, tecnologias, tipos e capacidades disponíveis.
- Tipo se relaciona com ambiente e objetivo de uso.
- Objetivo se relaciona com recursos, tecnologia e contexto do cliente.
- Serviços locais se relacionam com produtos elegíveis, mas não devem limitar venda nacional.

### 16.2 Cross-links recomendados

- Páginas de BTU devem linkar ambientes compatíveis.
- Páginas de ambiente devem linkar faixas de BTU sugeridas.
- Páginas de marca devem linkar tipos e BTUs mais vendidos da marca.
- Produtos devem linkar guias de escolha, simulador de consumo e instalação local quando elegível.
- Guias devem linkar categorias e filtros úteis, não apenas posts relacionados.

## 17. Produtos relacionados

Produtos relacionados devem apoiar decisão, comparação e aumento de ticket sem competir com o CTA principal. A lógica deve priorizar relevância real e disponibilidade.

### 17.1 Critérios de relacionamento

- Mesmo BTU: priorizar produtos com a mesma capacidade e tipo equivalente.
- Mesma marca: sugerir modelos da mesma marca com capacidades, recursos ou preços próximos.
- Mesmo ambiente: relacionar produtos adequados ao mesmo ambiente recomendado.
- Faixa de preço: sugerir alternativas em faixa semelhante para comparação objetiva.
- Upgrade: oferecer modelo superior com benefício claro, como inverter, menor ruído, Wi-Fi, maior eficiência ou marca premium.
- Alternativa mais econômica: mostrar opção de menor preço sem ocultar diferenças técnicas relevantes.
- Alternativa premium: mostrar opção de maior valor com justificativa concreta, como eficiência, silêncio, recursos ou garantia.
- Produtos complementares: sugerir acessórios compatíveis e serviços locais elegíveis sem bloquear a compra do equipamento.

### 17.2 Regras de exibição

- Não recomendar produto indisponível como principal alternativa.
- Não misturar capacidades incompatíveis sem explicar o motivo.
- Não recomendar instalação ou limpeza para CEPs fora de Goiânia e Região Metropolitana.
- Limitar blocos relacionados para evitar excesso de cards e distração.

## 18. Cross-sell e Upsell

Cross-sell e upsell devem ser úteis, discretos e contextuais. A oferta principal continua sendo o equipamento.

### 18.1 Cross-sell permitido

- Instalação: somente para Goiânia e Região Metropolitana, com aviso de cobertura antes de qualquer formulário.
- Limpeza: somente para Goiânia e Região Metropolitana, sem promessa fora da área atendida.
- Suporte de condensadora: sugerir quando compatível com o tipo de instalação.
- Protetor elétrico: sugerir como proteção complementar quando adequado à tensão e potência.
- Controle remoto universal: sugerir para reposição ou compatibilidade informada.
- Módulo Wi-Fi: sugerir somente quando o produto for compatível.
- Outros acessórios relacionados: itens de instalação, acabamento ou operação, desde que compatíveis e cadastrados corretamente.

### 18.2 Upsell permitido

- Versão inverter quando houver alternativa convencional comparável.
- Modelo com melhor classificação energética quando o benefício estiver claro.
- Modelo com menor nível de ruído para quarto, suíte e home office.
- Modelo com Wi-Fi ou recursos inteligentes quando compatível com a intenção do cliente.
- Capacidade superior somente quando fizer sentido para o ambiente ou carga térmica.

### 18.3 Restrições comerciais

- Não oferecer PMOC.
- Não oferecer manutenção corretiva.
- Não empurrar serviço local para venda nacional de equipamento.
- Não afirmar compatibilidade de acessório sem atributo ou regra validada.

## 19. Estratégia de páginas de categoria

Cada página de categoria deve ter:

- H1 objetivo.
- Texto curto acima da listagem com orientação prática.
- Filtros prioritários do contexto.
- Ordenação simples: relevância, menor preço, maior preço, mais vendidos e lançamentos quando houver dados.
- Cards com preço, parcelamento, principais diferenciais e CTA.
- Comparação limitada a três produtos.
- Conteúdo útil abaixo da listagem.
- FAQ real quando aplicável.
- Links para BTUs, marcas, ambientes e guias relacionados.

Páginas principais de categoria devem priorizar produtos e filtros, não textos longos na primeira dobra.

## 20. Estratégia de páginas de marca

Páginas de marca devem funcionar como vitrines comerciais e guias de confiança.

Conteúdo recomendado:

- H1: “Ar-condicionado {Marca}”.
- Introdução curta com proposta da marca.
- Filtros por BTU, tipo, tecnologia, ciclo, tensão e preço.
- Destaques por linha quando houver sortimento.
- Produtos mais relevantes.
- Guia curto: quando escolher a marca.
- FAQ com dúvidas reais sobre garantia, tecnologia e modelos.
- Links para comparações editoriais quando existirem.

Não afirmar características, garantias ou assistência sem dados válidos do fabricante ou da operação.

## 21. Estratégia de páginas por ambiente

Páginas por ambiente devem traduzir necessidade em critérios de compra.

Conteúdo recomendado:

- H1: “Ar-condicionado para {ambiente}”.
- Pergunta opcional: tamanho aproximado do ambiente.
- Faixas de BTU sugeridas por contexto.
- Produtos compatíveis e filtros relevantes.
- Explicação simples sobre incidência solar, pessoas, aparelhos e isolamento.
- Links para calculadora de BTUs e guias relacionados.
- FAQ do ambiente.

A recomendação deve ser educativa, não promessa absoluta.

## 22. Estratégia da Central de Climatização

A Central de Climatização deve ser uma área funcional e consultiva.

### 22.1 Estrutura completa

- Calculadoras:
  - Calculadora de BTUs.
  - Simulador de consumo.
  - Estimador de economia de energia.
- Guias:
  - Guias de marcas.
  - Guias por BTUs.
  - Guias por tipo de equipamento.
  - Guias por ambiente.
  - Guias de compra e dimensionamento.
- Comparadores:
  - Comparador de até três produtos.
  - Comparativos por marca, BTU, tecnologia e faixa de preço.
- Economia de energia:
  - Conteúdos sobre inverter, classificação energética, hábitos de uso e consumo estimado.
- Instalação:
  - Orientações gerais e páginas de serviço local para Goiânia e Região Metropolitana.
- Limpeza:
  - Orientações gerais e páginas de serviço local para Goiânia e Região Metropolitana.
- Problemas comuns:
  - Dúvidas recorrentes de uso, ruído, drenagem, cheiro, gelo e desempenho, sem oferecer manutenção corretiva.
- Tecnologias:
  - Inverter, quente/frio, Wi-Fi, serpentina, gás refrigerante, filtros e recursos de conforto.
- Glossário:
  - Termos técnicos explicados de forma simples para apoiar compra e comparação.
- Perguntas frequentes.

### 22.2 Regras

- Toda ferramenta deve levar a produtos compatíveis.
- O usuário deve poder pular ferramentas e comprar diretamente.
- Resultados devem explicar critérios usados e limites da recomendação.
- Não prometer consumo exato, economia garantida ou dimensionamento técnico definitivo.
- Guias devem linkar páginas comerciais relevantes.

## 23. Estratégia da busca

A busca deve combinar procura objetiva e busca por intenção.

### 23.1 Prioridade dos resultados

1. Produto exato
2. Produto semelhante
3. Categoria
4. Marca
5. Ambiente
6. Guia
7. Ferramenta
8. Blog

### 23.2 Consultas objetivas suportadas

- Produto
- SKU
- Modelo
- Marca
- BTU
- Tipo
- Ciclo
- Tensão
- Recurso
- Categoria

### 23.3 Consultas por intenção suportadas

- “ar para quarto pequeno”
- “ar-condicionado econômico”
- “ar silencioso para dormir”
- “ar para loja”
- “qual ar para sala grande”
- “ar com instalação em Goiânia”

### 23.4 Autocomplete

Deve sugerir:

- Produtos
- Categorias
- Marcas
- BTUs
- Ambientes
- Guias
- Ferramentas da Central de Climatização

### 23.5 Resultados sem correspondência exata

- Corrigir erros de digitação.
- Sugerir categorias próximas.
- Oferecer filtros iniciais úteis.
- Exibir guias ou ferramentas quando a busca for consultiva.
- Evitar página vazia sem próximos passos.

## 24. Governança do catálogo

- Novas categorias só devem ser criadas quando houver sortimento, demanda ou valor claro para navegação.
- Atributos devem ser normalizados antes de importações em massa.
- Marcas, BTUs e tensões devem usar valores padronizados.
- Páginas indexáveis devem ter conteúdo útil e produtos reais.
- Revisões de catálogo devem monitorar páginas sem produtos, filtros sem uso, buscas sem resultado e categorias duplicadas.
