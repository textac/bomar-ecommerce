# Regras do projeto Bom Ar E-commerce

Este documento é a constituição técnica e funcional do novo e-commerce da Bom Ar Condicionado. Todas as futuras tarefas do Codex neste repositório devem respeitar estas regras, salvo instrução explícita em contrário do responsável pelo projeto.

## 1. Negócio e cobertura

- A Bom Ar vende equipamentos de ar-condicionado para todo o Brasil.
- Goiás e Distrito Federal são mercados comerciais prioritários.
- Instalação e limpeza são oferecidas exclusivamente em Goiânia e Região Metropolitana.
- A restrição geográfica dos serviços deve aparecer claramente antes de o cliente preencher formulários ou iniciar uma contratação.
- Não incluir PMOC, manutenção corretiva ou serviços que a Bom Ar não presta.
- O principal faturamento vem da venda de equipamentos.
- Atendimento consultivo e WhatsApp são diferenciais importantes, mas o e-commerce deve permitir compra direta e rápida.

## 2. Tecnologia

- WordPress + WooCommerce + tema pai WoodMart.
- Nunca editar arquivos do WoodMart.
- Toda customização deve permanecer em `woodmart-child`.
- WooCommerce HPOS deve continuar compatível.
- Código preparado para integração futura com Olist ERP.
- Checkout preparado para integração Cielo E-commerce com EMV 3DS.
- Não afirmar que uma integração está pronta sem implementação e testes reais.
- Evitar dependências e plugins desnecessários.
- Não usar Elementor como base estrutural da loja.
- Priorizar PHP, HTML semântico, CSS modular e JavaScript progressivo.

## 3. Arquitetura

- Manter a estrutura modular existente.
- Componentes reutilizáveis em `components/`.
- Lógica PHP organizada em `inc/`.
- CSS separado por base, layout, componentes, páginas e fornecedores.
- JavaScript separado por módulos, páginas e fornecedores.
- Sobrescritas do WooCommerce somente dentro de `woodmart-child/woocommerce/`.
- Nunca duplicar lógica que possa ser transformada em helper, hook ou componente.
- Todas as funções PHP devem usar prefixo `bomar_`.
- Todas as classes CSS próprias devem usar prefixo `bomar-`.
- Variáveis JavaScript globais próprias devem usar namespace `BomAr` ou `bomar`.

## 4. Design System

- As cores oficiais do Design System devem seguir fielmente o Manual da Marca da Bom Ar.
- Azul principal: `#024DA1`.
- Azul secundário: `#1268B2`.
- Azul claro: `#ABE0F9`.
- Fundo principal branco.
- Evitar azul-marinho escuro na barra superior.
- Tipografia moderna, altamente legível e otimizada para web; pode usar soluções mais modernas do que as do manual da marca quando isso melhorar legibilidade e experiência digital.
- Ícones podem usar soluções mais modernas do que as do manual da marca, desde que preservem clareza, acessibilidade e coerência visual.
- Interface premium, limpa, clara e com bom espaçamento.
- Evitar excesso de cards, informações e elementos competindo pela atenção.
- Cada tela deve possuir hierarquia visual clara.
- Um CTA principal por contexto.
- Não usar carrossel automático no hero principal.
- Componentes devem funcionar em desktop, tablet e celular.

## 5. UX

- Mobile first.
- A compra direta nunca deve ser bloqueada por questionários.
- Ferramentas consultivas devem ser opcionais.
- A busca deve atender simultaneamente:
  - quem procura produto, marca, BTU, modelo ou categoria;
  - quem descreve uma necessidade, ambiente, orçamento ou objetivo.
- Página de produto com botão de compra sempre acessível no celular, preferencialmente por barra fixa após o primeiro scroll.
- Não sobrecarregar a primeira dobra da página de produto.
- Filtros de categoria devem ser rápidos, claros e responsivos.
- Comparação entre produtos deve ser simples e limitada a até três itens.
- Carrinho e checkout devem reduzir distrações.
- Não obrigar criação de conta para comprar.
- Serviços locais não podem ser oferecidos para CEPs fora da cobertura.

## 6. Central de Climatização

- Deve ser uma área funcional, não apenas um blog.
- Incluir futuramente:
  - Calculadora de BTUs;
  - simulador de consumo;
  - comparador;
  - escolha por ambiente;
  - guias de marcas;
  - guias por BTUs;
  - perguntas frequentes.
- Toda ferramenta deve conduzir para produtos compatíveis sem dificultar a compra direta.

## 7. SEO

- Arquitetura nacional para categorias, marcas, BTUs, tipos e ambientes.
- Páginas regionais separadas para mercados prioritários.
- Não inserir “Goiânia” automaticamente em páginas nacionais.
- URLs curtas, legíveis e estáveis.
- HTML semântico.
- Breadcrumbs.
- Dados estruturados compatíveis com o conteúdo real.
- Schema de `Product`, `Offer`, `BreadcrumbList`, `Organization`, `LocalBusiness`, `FAQ` e `Review` somente quando houver dados válidos.
- Não gerar páginas locais em massa sem conteúdo e operação reais.
- Conteúdo útil deve aparecer antes de textos extensos feitos apenas para SEO.
- Evitar conteúdo duplicado e indexação de combinações de filtros sem valor.

## 8. Performance

- Core Web Vitals como requisito.
- Evitar JavaScript desnecessário.
- Não carregar CSS e JS de uma funcionalidade em páginas onde ela não é usada.
- Usar carregamento condicional de assets.
- Imagens responsivas com `srcset`, dimensões definidas e formatos modernos.
- Lazy loading apenas onde adequado.
- Evitar CLS.
- Priorizar acessibilidade e desempenho acima de efeitos visuais.
- Não adicionar bibliotecas pesadas sem justificativa técnica.

## 9. Acessibilidade

- Seguir WCAG 2.2 nível AA sempre que aplicável.
- Navegação por teclado.
- Estados de foco visíveis.
- Contraste adequado.
- Labels em formulários.
- Textos alternativos em imagens relevantes.
- ARIA somente quando HTML semântico não for suficiente.
- Respeitar `prefers-reduced-motion`.

## 10. Segurança e qualidade

- Sanitizar entradas.
- Escapar saídas.
- Usar nonces em ações sensíveis.
- Verificar capabilities no painel.
- Não expor credenciais, tokens ou segredos no repositório.
- Nunca colocar chaves da Cielo, Olist ou qualquer integração no código versionado.
- Seguir WordPress Coding Standards.
- PHP compatível com a versão do servidor definida no projeto.
- Não introduzir warnings ou notices.
- Toda tarefa deve incluir testes ou verificações compatíveis com a alteração.

## 11. Processo de desenvolvimento

- Antes de tarefas grandes, apresentar plano.
- Não alterar arquivos fora do escopo solicitado.
- Informar arquivos criados, modificados e removidos.
- Executar `php -l` nos arquivos PHP alterados.
- Registrar limitações e pontos não testados.
- Não afirmar que algo está integrado ou funcionando sem evidência.
- Commits pequenos, claros e focados.
- Pull Requests devem conter resumo, arquivos alterados, testes e riscos.
- Não implementar funcionalidades futuras por antecipação.
- Não misturar várias sprints em um único PR.

## 12. Prioridades do projeto

Ordem atual:

1. Regras do projeto.
2. Design System.
3. Header e barra superior.
4. Mega Menu.
5. Busca híbrida.
6. Home.
7. Página de categoria.
8. Página de produto.
9. Carrinho.
10. Checkout e preparação Cielo EMV 3DS.
11. Central de Climatização.
12. SEO avançado e integrações.
