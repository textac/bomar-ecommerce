# Biblioteca oficial de componentes Bom Ar E-commerce

Este documento define a biblioteca oficial de componentes do e-commerce da Bom Ar Condicionado. Ele é uma referência de produto, UX e design system para futuras implementações em WordPress, WooCommerce e tema filho `woodmart-child`.

## Princípios gerais

- Não implementar componentes diretamente a partir deste documento sem tarefa específica.
- Todo componente deve respeitar mobile first, WCAG 2.2 AA, performance, HTML semântico e estados de foco visíveis.
- A compra direta nunca deve ser bloqueada por ferramentas consultivas, formulários ou questionários.
- WhatsApp deve apoiar o atendimento consultivo, mas não substituir a compra direta.
- Serviços de instalação e limpeza devem indicar claramente a cobertura restrita a Goiânia e Região Metropolitana antes de qualquer formulário.
- Componentes transacionais devem ser compatíveis com WooCommerce, HPOS e preparação futura para Olist ERP e Cielo E-commerce com EMV 3DS, sem afirmar integrações não implementadas.
- Classes CSS futuras devem usar prefixo `bomar-`; funções PHP futuras devem usar prefixo `bomar_`; JavaScript global futuro deve usar `BomAr` ou `bomar`.

## 1. FUNDAMENTOS

### Container

- **Objetivo:** limitar largura, alinhar conteúdo e preservar respiro visual em páginas, seções e fluxos transacionais.
- **Quando usar:** em blocos principais de home, categorias, produto, carrinho, checkout, guias e ferramentas da Central de Climatização.
- **Quando não usar:** dentro de componentes que já recebem largura do contexto ou em elementos que precisam ocupar toda a viewport, como barras fixas.
- **Conteúdo obrigatório:** conteúdo interno com hierarquia clara e espaçamentos consistentes.
- **Estados:** padrão; fluido; estreito para leitura; amplo para listagens.
- **Comportamento responsivo:** largura fluida no mobile, margens laterais seguras e largura máxima no desktop.
- **Requisitos de acessibilidade:** não deve alterar ordem lógica de leitura nem criar rolagem horizontal.
- **Dependências:** tokens de espaçamento e breakpoints do design system.
- **Variações permitidas:** padrão, narrow, wide e full-bleed controlado.

### Grid

- **Objetivo:** organizar cards, colunas e áreas de conteúdo com alinhamento previsível.
- **Quando usar:** vitrines de produto, categorias, marcas, benefícios, comparativos e layouts de conteúdo.
- **Quando não usar:** para ordenação semântica complexa que prejudique leitura ou navegação por teclado.
- **Conteúdo obrigatório:** itens com tamanho mínimo legível e ordem DOM coerente.
- **Estados:** padrão; compacto; com colunas automáticas; com destaque de item.
- **Comportamento responsivo:** uma coluna no mobile quando necessário, duas em tablets e múltiplas no desktop conforme conteúdo.
- **Requisitos de acessibilidade:** a ordem visual deve acompanhar a ordem de navegação; não depender de hover.
- **Dependências:** Container, tokens de gap e breakpoints.
- **Variações permitidas:** product grid, category grid, comparison grid e content grid.

### Section

- **Objetivo:** separar blocos de página com função, título e hierarquia visual claros.
- **Quando usar:** hero, listagens, benefícios, FAQ, guias, SEO útil, reviews e ferramentas.
- **Quando não usar:** para agrupar elementos sem relação temática ou criar espaçamentos artificiais.
- **Conteúdo obrigatório:** título ou rótulo acessível quando a seção tiver significado próprio.
- **Estados:** padrão; destaque; fundo suave; transacional reduzido.
- **Comportamento responsivo:** espaçamentos menores no mobile e maiores no desktop, sem excesso na primeira dobra.
- **Requisitos de acessibilidade:** usar landmarks ou headings coerentes quando aplicável.
- **Dependências:** Container e Section Header quando houver título visível.
- **Variações permitidas:** default, muted, featured, compact e checkout.

### Stack

- **Objetivo:** empilhar elementos verticalmente com espaçamento consistente.
- **Quando usar:** formulários, cards, blocos de preço, resumos, mensagens e conteúdo textual.
- **Quando não usar:** para layout horizontal ou quando espaçamento individual for essencial para entendimento.
- **Conteúdo obrigatório:** elementos relacionados em sequência lógica.
- **Estados:** espaçamento compacto, padrão, confortável e editorial.
- **Comportamento responsivo:** pode reduzir gaps em telas pequenas sem comprometer toque e leitura.
- **Requisitos de acessibilidade:** manter ordem semântica natural.
- **Dependências:** tokens de espaçamento.
- **Variações permitidas:** xs, sm, md, lg e xl.

### Cluster

- **Objetivo:** agrupar ações ou metadados em linha com quebra responsiva.
- **Quando usar:** chips, botões secundários, selos, links auxiliares e grupos de filtros.
- **Quando não usar:** para navegação complexa que exija hierarquia ou itens com relação sequencial rígida.
- **Conteúdo obrigatório:** itens relacionados e espaçamento mínimo entre alvos clicáveis.
- **Estados:** alinhado à esquerda, centro, direita, entre espaços e com quebra.
- **Comportamento responsivo:** deve quebrar linhas sem sobrepor conteúdo.
- **Requisitos de acessibilidade:** manter foco visível e área de toque adequada.
- **Dependências:** tokens de gap e Button, Link ou Filter Chip conforme uso.
- **Variações permitidas:** wrap, nowrap, center, end e space-between.

### Divider

- **Objetivo:** separar visualmente conteúdos sem criar peso excessivo.
- **Quando usar:** entre grupos de formulário, itens de resumo, blocos técnicos e seções secundárias.
- **Quando não usar:** para substituir espaçamento ou separar itens que já têm títulos claros.
- **Conteúdo obrigatório:** nenhum; pode conter rótulo curto quando necessário.
- **Estados:** horizontal, vertical, sutil e com rótulo.
- **Comportamento responsivo:** vertical deve virar horizontal quando a composição empilhar.
- **Requisitos de acessibilidade:** decorativo deve ser ignorado por leitores de tela; com rótulo deve expor texto.
- **Dependências:** tokens de borda e contraste.
- **Variações permitidas:** subtle, strong, inset e labeled.

### Visually Hidden

- **Objetivo:** disponibilizar texto para tecnologias assistivas sem exibição visual.
- **Quando usar:** labels de ícones, contexto extra de preço, status, navegação e mensagens dinâmicas.
- **Quando não usar:** para esconder conteúdo relevante de todos os usuários ou manipular SEO.
- **Conteúdo obrigatório:** texto curto, específico e útil.
- **Estados:** padrão e focusable para links de pular conteúdo.
- **Comportamento responsivo:** invariável entre breakpoints.
- **Requisitos de acessibilidade:** deve permanecer disponível para leitores de tela e foco quando focusable.
- **Dependências:** utilitário CSS futuro validado por acessibilidade.
- **Variações permitidas:** hidden permanente e hidden-until-focus.

## 2. AÇÕES

### Button

- **Objetivo:** executar ações importantes com affordance clara.
- **Quando usar:** compra, envio, aplicação de filtros, cálculo de entrega, navegação de etapas e confirmação.
- **Quando não usar:** para navegação textual simples que deve ser Link.
- **Conteúdo obrigatório:** rótulo verbal claro; ícone somente como apoio.
- **Estados:** padrão, hover, foco, ativo, loading, disabled, sucesso e erro quando aplicável.
- **Comportamento responsivo:** largura total em contextos mobile críticos e largura pelo conteúdo em desktop.
- **Requisitos de acessibilidade:** usar elemento `button` para ações, foco visível, nome acessível e tamanho de toque adequado.
- **Dependências:** tokens de cor, foco e Loading Spinner.
- **Variações permitidas:** primary, secondary, tertiary, danger, ghost, full-width e icon-leading.

### Icon Button

- **Objetivo:** executar ação compacta representada por ícone.
- **Quando usar:** abrir menu, fechar modal/drawer, favoritar, remover item e controlar galeria.
- **Quando não usar:** quando o ícone não for universalmente compreensível sem texto acessível.
- **Conteúdo obrigatório:** ícone e nome acessível via texto oculto ou atributo adequado.
- **Estados:** padrão, hover, foco, ativo, selected, disabled e loading.
- **Comportamento responsivo:** área de toque mínima no mobile, sem depender de hover.
- **Requisitos de acessibilidade:** `aria-label` ou texto equivalente, foco visível e estado anunciado quando alternável.
- **Dependências:** biblioteca de ícones aprovada e Tooltip opcional.
- **Variações permitidas:** solid, outline, ghost, circular e square.

### Link

- **Objetivo:** levar o usuário para outra página, seção ou recurso.
- **Quando usar:** breadcrumbs, navegação, conteúdo editorial, políticas, guias e links auxiliares.
- **Quando não usar:** para ações que alteram estado sem navegação.
- **Conteúdo obrigatório:** texto descritivo, evitando “clique aqui”.
- **Estados:** padrão, hover, foco, visitado quando relevante, ativo e disabled somente quando inevitável.
- **Comportamento responsivo:** deve quebrar linha corretamente e manter toque adequado quando em navegação.
- **Requisitos de acessibilidade:** destino claro, foco visível e indicação se abrir nova aba.
- **Dependências:** tokens de cor e tipografia.
- **Variações permitidas:** inline, standalone, nav, subtle e external.

### WhatsApp Button

- **Objetivo:** abrir atendimento consultivo por WhatsApp sem bloquear a compra direta.
- **Quando usar:** produto, serviços locais, dúvidas de instalação, guias e suporte pré-venda.
- **Quando não usar:** como único CTA de compra de produto disponível para venda online.
- **Conteúdo obrigatório:** rótulo com ação clara, contexto da conversa e aviso quando envolver serviço local.
- **Estados:** padrão, hover, foco, loading e disabled quando canal indisponível.
- **Comportamento responsivo:** pode aparecer como CTA secundário; no mobile não deve competir com CTA principal de compra.
- **Requisitos de acessibilidade:** nome acessível, indicação de abertura externa e contraste adequado.
- **Dependências:** configuração de número/canal, parâmetros de mensagem e Link/Button.
- **Variações permitidas:** secondary, outline, compact, floating contextual e product-support.

### Add to Cart Button

- **Objetivo:** adicionar produto ao carrinho mantendo o usuário no fluxo de compra.
- **Quando usar:** cards de produto, página de produto, recomendações e comparativos.
- **Quando não usar:** produto indisponível, orçamento obrigatório inexistente no escopo ou serviço fora de cobertura.
- **Conteúdo obrigatório:** rótulo “Adicionar ao carrinho” ou equivalente, produto associado e quantidade quando aplicável.
- **Estados:** padrão, loading, adicionado, erro, disabled, sem estoque e variação pendente.
- **Comportamento responsivo:** visível e fácil de tocar; em cards pode ser compacto no mobile sem ocultar preço.
- **Requisitos de acessibilidade:** feedback anunciado, foco preservado e erro claro.
- **Dependências:** WooCommerce, Quantity Selector, Toast ou Alert.
- **Variações permitidas:** card, product-page, sticky-mobile e quick-add.

### Buy Now Button

- **Objetivo:** iniciar compra direta com menor fricção possível.
- **Quando usar:** página de produto, sticky buy bar mobile e ofertas com produto configurado.
- **Quando não usar:** quando houver variação obrigatória não selecionada ou produto indisponível.
- **Conteúdo obrigatório:** rótulo claro como “Comprar agora”, produto, quantidade e variações selecionadas.
- **Estados:** padrão, loading, disabled, erro, sem estoque e redirecionando.
- **Comportamento responsivo:** CTA principal no contexto de compra, especialmente no mobile.
- **Requisitos de acessibilidade:** foco visível, feedback de redirecionamento e mensagens de bloqueio compreensíveis.
- **Dependências:** WooCommerce, Checkout CTA e validação de produto.
- **Variações permitidas:** primary, sticky-mobile e checkout-shortcut.

## 3. FORMULÁRIOS

### Input

- **Objetivo:** coletar dados curtos com label claro.
- **Quando usar:** nome, e-mail, telefone, endereço, cupom, documentos e dados de contato.
- **Quando não usar:** escolhas com lista controlada, texto longo ou alternância booleana.
- **Conteúdo obrigatório:** label visível, valor, ajuda quando necessária e mensagem de erro.
- **Estados:** vazio, preenchido, foco, disabled, readonly, erro, sucesso e loading quando validado remotamente.
- **Comportamento responsivo:** largura total no mobile e teclado adequado ao tipo de dado.
- **Requisitos de acessibilidade:** label real associado, autocomplete quando aplicável e erro anunciado.
- **Dependências:** Validation Message e tokens de formulário.
- **Variações permitidas:** text, email, tel, number, password, masked e readonly.

### Search Input

- **Objetivo:** permitir busca por produto, marca, modelo, BTU, ambiente, necessidade ou objetivo.
- **Quando usar:** header, página de busca, Central de Climatização e filtros de catálogo.
- **Quando não usar:** para navegação por categorias fixas sem intenção de pesquisa.
- **Conteúdo obrigatório:** label ou placeholder descritivo, botão de envio e feedback de autocomplete quando existir.
- **Estados:** vazio, digitando, carregando, com sugestões, sem resultados, erro e foco.
- **Comportamento responsivo:** sempre acessível; no mobile pode abrir experiência dedicada sem perder contexto.
- **Requisitos de acessibilidade:** label, controle por teclado, anúncios de sugestões e preservação da busca tradicional.
- **Dependências:** autocomplete futuro, Loading Spinner, Empty State e Error State.
- **Variações permitidas:** header, expanded, overlay-mobile e results-page.

### Select

- **Objetivo:** selecionar uma opção em lista controlada.
- **Quando usar:** ordenação, estado, cidade, tensão, ciclo, marca e filtros simples.
- **Quando não usar:** listas muito longas sem busca ou escolhas múltiplas complexas.
- **Conteúdo obrigatório:** label, opção atual, opções válidas e mensagem de erro quando aplicável.
- **Estados:** fechado, aberto, foco, disabled, erro e selecionado.
- **Comportamento responsivo:** nativo preferencialmente no mobile, evitando componentes pesados.
- **Requisitos de acessibilidade:** label associado, navegação por teclado e valor anunciado.
- **Dependências:** Validation Message.
- **Variações permitidas:** native, compact, sort e filter.

### Checkbox

- **Objetivo:** permitir seleção múltipla ou aceite explícito.
- **Quando usar:** filtros, preferências, aceite de termos e seleção de comparação.
- **Quando não usar:** escolha única mutuamente exclusiva, caso de Radio.
- **Conteúdo obrigatório:** rótulo claro e descrição quando o impacto não for óbvio.
- **Estados:** unchecked, checked, indeterminate, foco, disabled e erro.
- **Comportamento responsivo:** alvo de toque ampliado e labels clicáveis.
- **Requisitos de acessibilidade:** input real associado ao label e estado indeterminate anunciado.
- **Dependências:** Validation Message quando obrigatório.
- **Variações permitidas:** default, filter, card-checkbox e comparison.

### Radio

- **Objetivo:** escolher uma opção entre alternativas mutuamente exclusivas.
- **Quando usar:** tipo de entrega, método de pagamento, tensão quando exclusiva e respostas de ferramentas.
- **Quando não usar:** seleção múltipla ou alternância independente.
- **Conteúdo obrigatório:** grupo com legenda, opções, rótulos e ajuda contextual.
- **Estados:** unchecked, checked, foco, disabled e erro.
- **Comportamento responsivo:** empilha no mobile quando opções forem longas.
- **Requisitos de acessibilidade:** `fieldset` e `legend` ou semântica equivalente; navegação por teclado.
- **Dependências:** Validation Message.
- **Variações permitidas:** default, card-radio, payment e tool-step.

### Switch

- **Objetivo:** alternar configuração binária com efeito imediato.
- **Quando usar:** preferências opcionais e filtros simples que ligam/desligam.
- **Quando não usar:** envio de formulário crítico, aceite legal ou decisão que precise de confirmação explícita.
- **Conteúdo obrigatório:** label, estado atual e descrição do efeito quando necessário.
- **Estados:** on, off, foco, disabled e loading quando persistido remotamente.
- **Comportamento responsivo:** alvo de toque adequado.
- **Requisitos de acessibilidade:** anunciar estado e permitir teclado.
- **Dependências:** nenhum obrigatório além de formulário base.
- **Variações permitidas:** default, compact e preference.

### Textarea

- **Objetivo:** coletar texto livre mais longo.
- **Quando usar:** observações de pedido, mensagem para atendimento e feedback.
- **Quando não usar:** dados estruturados que exigem validação específica.
- **Conteúdo obrigatório:** label, limite ou orientação quando aplicável e mensagem de validação.
- **Estados:** vazio, preenchido, foco, disabled, erro e sucesso.
- **Comportamento responsivo:** largura total, altura suficiente e redimensionamento controlado.
- **Requisitos de acessibilidade:** label real, contador acessível se houver limite e erro anunciado.
- **Dependências:** Validation Message.
- **Variações permitidas:** default, compact e support-message.

### CEP Field

- **Objetivo:** coletar CEP para entrega, disponibilidade e cobertura de serviços locais.
- **Quando usar:** página de produto, carrinho, checkout, serviços e calculadoras de entrega.
- **Quando não usar:** como barreira para visualizar preço, produto ou compra nacional de equipamento.
- **Conteúdo obrigatório:** label “CEP”, máscara, ajuda para encontrar CEP e mensagem sobre cobertura quando serviço local estiver envolvido.
- **Estados:** vazio, digitando, consultando, válido, inválido, fora de cobertura, erro e sucesso.
- **Comportamento responsivo:** teclado numérico e botão de cálculo próximo ao campo.
- **Requisitos de acessibilidade:** label, instrução clara, feedback anunciado e não depender apenas de cor.
- **Dependências:** Delivery Calculator, Validation Message e serviço de consulta de CEP.
- **Variações permitidas:** product-delivery, checkout-address, service-coverage e compact.

### Quantity Selector

- **Objetivo:** alterar quantidade de itens comprados.
- **Quando usar:** produto, mini cart, carrinho e recomendações adicionáveis.
- **Quando não usar:** produtos com quantidade fixa ou fora de estoque.
- **Conteúdo obrigatório:** valor atual, botões de incremento/decremento e limites.
- **Estados:** padrão, foco, mínimo, máximo, loading, disabled e erro de estoque.
- **Comportamento responsivo:** controles grandes o suficiente para toque e sem layout quebrado em cart item.
- **Requisitos de acessibilidade:** botões com nomes claros e valor anunciado.
- **Dependências:** WooCommerce e Validation Message.
- **Variações permitidas:** stepper, input-number e compact-cart.

### Validation Message

- **Objetivo:** informar erro, sucesso ou ajuda contextual em campos e grupos.
- **Quando usar:** validação de formulários, CEP, checkout, cupom e pagamentos.
- **Quando não usar:** como substituto de Alert para mensagens globais.
- **Conteúdo obrigatório:** mensagem específica, campo relacionado e orientação de correção quando houver erro.
- **Estados:** ajuda, erro, sucesso, aviso e loading.
- **Comportamento responsivo:** deve ficar próximo ao campo e quebrar linhas sem ocultar controles.
- **Requisitos de acessibilidade:** associação por `aria-describedby` e anúncio quando dinâmico.
- **Dependências:** componentes de formulário.
- **Variações permitidas:** field, group, inline e persistent.

## 4. FEEDBACK

### Alert

- **Objetivo:** comunicar informações importantes em contexto de página ou fluxo.
- **Quando usar:** erro de checkout, aviso de cobertura, sucesso de pedido, indisponibilidade e informação crítica.
- **Quando não usar:** feedback efêmero de microação, caso de Toast.
- **Conteúdo obrigatório:** título ou mensagem clara, tipo e ação quando necessária.
- **Estados:** info, warning, error, success e loading/processando.
- **Comportamento responsivo:** largura total do contexto no mobile e sem cobrir CTA crítico.
- **Requisitos de acessibilidade:** papel ARIA adequado apenas quando necessário e foco gerenciado em erros críticos.
- **Dependências:** tokens de cor e ícones.
- **Variações permitidas:** inline, page, checkout, dismissible e persistent.

### Toast

- **Objetivo:** confirmar ação breve sem interromper o usuário.
- **Quando usar:** produto adicionado, cupom aplicado, item removido e filtro atualizado.
- **Quando não usar:** erros críticos de checkout ou mensagens que exigem leitura prolongada.
- **Conteúdo obrigatório:** mensagem curta e ação opcional desfazer/ver carrinho.
- **Estados:** info, success, warning, error e dismissing.
- **Comportamento responsivo:** posição que não cubra barras fixas, CTA ou safe areas.
- **Requisitos de acessibilidade:** anúncio não intrusivo e tempo suficiente para leitura.
- **Dependências:** sistema de notificações futuro.
- **Variações permitidas:** success, error, action, compact e cart.

### Tooltip

- **Objetivo:** explicar termo, ícone ou informação complementar curta.
- **Quando usar:** parcelamento, selos, especificações e ícones não óbvios.
- **Quando não usar:** conteúdo essencial, mensagens de erro ou informações longas.
- **Conteúdo obrigatório:** texto curto e acionador acessível.
- **Estados:** oculto, visível, foco, hover e dismissed.
- **Comportamento responsivo:** no mobile deve funcionar por toque e não sair da viewport.
- **Requisitos de acessibilidade:** acionável por teclado e sem depender exclusivamente de hover.
- **Dependências:** Icon Button ou Link conforme acionador.
- **Variações permitidas:** top, bottom, start, end e rich curto.

### Loading Spinner

- **Objetivo:** indicar processamento curto.
- **Quando usar:** botões, consulta de CEP, aplicação de cupom e carregamentos rápidos.
- **Quando não usar:** carregamentos de conteúdo estrutural em que Skeleton comunica melhor.
- **Conteúdo obrigatório:** nome acessível ou texto de loading quando isolado.
- **Estados:** indeterminado e inline.
- **Comportamento responsivo:** não deve causar deslocamento de layout.
- **Requisitos de acessibilidade:** respeitar `prefers-reduced-motion` e anunciar estado quando necessário.
- **Dependências:** tokens de movimento.
- **Variações permitidas:** inline, button, page-small e reduced-motion.

### Skeleton

- **Objetivo:** representar carregamento de conteúdo mantendo estabilidade visual.
- **Quando usar:** cards, galeria, resumo de produto, listagens e blocos de checkout carregados rapidamente.
- **Quando não usar:** quando o conteúdo é instantâneo ou quando spinner com texto é mais claro.
- **Conteúdo obrigatório:** forma aproximada do conteúdo final.
- **Estados:** loading e replaced.
- **Comportamento responsivo:** deve seguir dimensões do layout final para evitar CLS.
- **Requisitos de acessibilidade:** normalmente oculto de leitores de tela, com status textual quando necessário.
- **Dependências:** tokens de cor e movimento reduzido.
- **Variações permitidas:** text, card, image, price, gallery e checkout-summary.

### Empty State

- **Objetivo:** orientar o usuário quando não há conteúdo ou resultado.
- **Quando usar:** busca sem resultado, filtros vazios, carrinho vazio, reviews ausentes e comparador vazio.
- **Quando não usar:** erro técnico ou falha de carregamento.
- **Conteúdo obrigatório:** título, explicação curta e próxima ação.
- **Estados:** default, search, cart, comparison e reviews.
- **Comportamento responsivo:** conteúdo centralizado ou contextual sem ocupar espaço excessivo.
- **Requisitos de acessibilidade:** mensagem textual clara e foco encaminhado quando surgir após ação.
- **Dependências:** Button ou Link.
- **Variações permitidas:** search, cart, category, reviews e tool.

### Error State

- **Objetivo:** explicar falha e oferecer recuperação.
- **Quando usar:** erro de carregamento, falha de pagamento, indisponibilidade de API e falha de CEP.
- **Quando não usar:** validação simples de campo, caso de Validation Message.
- **Conteúdo obrigatório:** descrição, orientação e ação de tentar novamente ou alternativa.
- **Estados:** recoverable, blocking, payment, network e service-unavailable.
- **Comportamento responsivo:** deve preservar ações principais visíveis.
- **Requisitos de acessibilidade:** foco em erros bloqueantes e mensagens específicas.
- **Dependências:** Alert, Button e suporte a logging futuro.
- **Variações permitidas:** inline, page, checkout e tool.

### Success State

- **Objetivo:** confirmar conclusão de tarefa e orientar próximo passo.
- **Quando usar:** pedido concluído, cadastro salvo, cupom aplicado, avaliação enviada e solicitação recebida.
- **Quando não usar:** microações simples que Toast resolve.
- **Conteúdo obrigatório:** confirmação clara, referência quando existir e próxima ação.
- **Estados:** inline, page, checkout e tool-result.
- **Comportamento responsivo:** priorizar informação principal e CTA seguinte no mobile.
- **Requisitos de acessibilidade:** anúncio de sucesso e foco coerente.
- **Dependências:** Alert, Button ou Link.
- **Variações permitidas:** compact, order, form e recommendation.

## 5. NAVEGAÇÃO

### Header

- **Objetivo:** concentrar identidade, busca, navegação principal e acesso a carrinho/conta.
- **Quando usar:** páginas públicas do e-commerce, com versão reduzida no checkout.
- **Quando não usar:** landing pages transacionais que exijam distração mínima, salvo navegação essencial.
- **Conteúdo obrigatório:** logo, busca, navegação, carrinho e acesso de atendimento conforme contexto.
- **Estados:** padrão, sticky quando aprovado, compact, checkout e mobile.
- **Comportamento responsivo:** busca acessível, menu mobile claro e sem sobrecarregar primeira dobra.
- **Requisitos de acessibilidade:** landmarks, skip link, foco visível e navegação por teclado.
- **Dependências:** Top Bar, Mega Menu, Mobile Menu, Search Input e Mini Cart.
- **Variações permitidas:** default, checkout, compact e mobile.

### Top Bar

- **Objetivo:** exibir informações institucionais ou comerciais de apoio.
- **Quando usar:** frete, atendimento, diferenciais, cobertura local e mensagens sazonais.
- **Quando não usar:** para múltiplas mensagens competindo com navegação principal.
- **Conteúdo obrigatório:** mensagem curta e link quando houver ação.
- **Estados:** padrão, hidden-mobile, alert e service-coverage.
- **Comportamento responsivo:** pode ser simplificada ou ocultada no mobile se competir com busca.
- **Requisitos de acessibilidade:** contraste adequado e texto legível.
- **Dependências:** Link e Trust Bar opcional.
- **Variações permitidas:** info, promo, service-area e support.

### Mega Menu

- **Objetivo:** permitir navegação por produto, BTU, marca, ambiente e objetivo.
- **Quando usar:** desktop e tablets com espaço suficiente.
- **Quando não usar:** mobile como mega menu completo; usar Mobile Menu.
- **Conteúdo obrigatório:** categorias principais, links relevantes e hierarquia clara.
- **Estados:** fechado, aberto, foco, hover, loading e erro parcial.
- **Comportamento responsivo:** substituído por navegação mobile simples em telas pequenas.
- **Requisitos de acessibilidade:** teclado, fechamento previsível, foco gerenciado e sem dependência exclusiva de hover.
- **Dependências:** Header, Link e Category Card opcional.
- **Variações permitidas:** categories, brands, btus, environments e goals.

### Mobile Menu

- **Objetivo:** oferecer navegação rápida e acessível em telas pequenas.
- **Quando usar:** smartphones e telas estreitas.
- **Quando não usar:** desktop amplo em que Mega Menu é mais eficiente.
- **Conteúdo obrigatório:** categorias, busca, atendimento, conta/carrinho e fechamento claro.
- **Estados:** fechado, aberto, subnível, loading e erro.
- **Comportamento responsivo:** ocupa viewport com safe areas, sem prender usuário indevidamente.
- **Requisitos de acessibilidade:** foco preso enquanto aberto, ESC/fechar, labels e ordem lógica.
- **Dependências:** Header, Search Input e Accordion.
- **Variações permitidas:** drawer, full-screen, nested e compact.

### Breadcrumb

- **Objetivo:** mostrar localização e permitir retorno hierárquico.
- **Quando usar:** categorias, produtos, guias, páginas regionais e ferramentas.
- **Quando não usar:** home ou fluxos em que etapas são melhor representadas por Checkout Steps.
- **Conteúdo obrigatório:** página inicial, ancestrais e página atual.
- **Estados:** padrão, truncado e schema-ready quando dados forem reais.
- **Comportamento responsivo:** truncar intermediários no mobile sem perder contexto.
- **Requisitos de acessibilidade:** nav com label, item atual indicado e links claros.
- **Dependências:** Link e dados estruturados quando válidos.
- **Variações permitidas:** default, compact e product.

### Tabs

- **Objetivo:** alternar painéis relacionados no mesmo nível.
- **Quando usar:** especificações, descrição, avaliações e informações complementares.
- **Quando não usar:** conteúdo essencial que precisa aparecer na sequência no mobile; considerar Accordion.
- **Conteúdo obrigatório:** lista de abas e painéis associados.
- **Estados:** selected, focus, disabled e loading quando painel remoto.
- **Comportamento responsivo:** pode virar Accordion em telas pequenas.
- **Requisitos de acessibilidade:** padrão de tabs acessível com teclado e relação tab/panel.
- **Dependências:** Section e Accordion para variante mobile.
- **Variações permitidas:** horizontal, scrollable, product-info e account.

### Accordion

- **Objetivo:** expandir e recolher conteúdo relacionado.
- **Quando usar:** FAQ, filtros mobile, especificações e menu mobile.
- **Quando não usar:** para esconder informações críticas de compra como preço e CTA.
- **Conteúdo obrigatório:** cabeçalho, painel e estado expandido.
- **Estados:** collapsed, expanded, focus, disabled e loading.
- **Comportamento responsivo:** útil no mobile; no desktop pode abrir múltiplos painéis.
- **Requisitos de acessibilidade:** botão real, `aria-expanded` e relação com painel.
- **Dependências:** Icon Button opcional.
- **Variações permitidas:** single, multiple, faq, filter e product-specs.

### Pagination

- **Objetivo:** navegar entre páginas de listagens.
- **Quando usar:** categorias, busca, blog e reviews.
- **Quando não usar:** quando carregar mais for comprovadamente melhor e acessível para o contexto.
- **Conteúdo obrigatório:** página atual, próximas/anteriores e acesso a páginas próximas.
- **Estados:** padrão, current, disabled, loading e truncated.
- **Comportamento responsivo:** simplificar no mobile mantendo anterior/próxima e página atual.
- **Requisitos de acessibilidade:** nav com label, item atual anunciado e links rastreáveis.
- **Dependências:** Link e Button quando AJAX.
- **Variações permitidas:** numbered, simple, load-more e hybrid.

### Bottom Navigation Mobile

- **Objetivo:** oferecer acesso rápido a destinos principais no mobile.
- **Quando usar:** quando validado para facilitar busca, categorias, carrinho e atendimento.
- **Quando não usar:** checkout, páginas com sticky buy bar concorrente ou quando cobrir conteúdo crítico.
- **Conteúdo obrigatório:** até cinco itens, rótulos visíveis e ícones compreensíveis.
- **Estados:** padrão, ativo, foco, badge e disabled quando inevitável.
- **Comportamento responsivo:** respeitar safe areas e coexistir com barras fixas apenas quando não houver conflito.
- **Requisitos de acessibilidade:** labels, foco visível e estado atual anunciado.
- **Dependências:** Header, Mini Cart e WhatsApp Button opcional.
- **Variações permitidas:** default, store, support-focused e hidden-on-checkout.

## 6. CATÁLOGO

### Product Card

- **Objetivo:** apresentar produto e permitir decisão rápida em listagens.
- **Quando usar:** categorias, busca, vitrines, recomendações e comparativos.
- **Quando não usar:** produto com informação insuficiente para venda ou conteúdo editorial.
- **Conteúdo obrigatório:** imagem, nome, preço, parcelamento, principais diferenciais, estoque quando relevante e CTA.
- **Estados:** padrão, hover, foco, loading, sem estoque, promocional e comparado.
- **Comportamento responsivo:** legível em grid mobile, sem esconder preço ou CTA essencial.
- **Requisitos de acessibilidade:** imagem com texto alternativo adequado, links claros e botões acessíveis.
- **Dependências:** Price Block, Installment Block, Product Badge e Add to Cart Button.
- **Variações permitidas:** grid, list, compact, recommendation e comparison.

### Category Card

- **Objetivo:** direcionar para categorias relevantes.
- **Quando usar:** home, mega menu, páginas de categoria e guias por necessidade.
- **Quando não usar:** para conteúdo que não tenha destino claro.
- **Conteúdo obrigatório:** nome da categoria, imagem/ícone opcional e link.
- **Estados:** padrão, hover, foco e selected quando usado em ferramenta.
- **Comportamento responsivo:** grid simples e áreas clicáveis adequadas.
- **Requisitos de acessibilidade:** link com nome descritivo e imagem decorativa quando redundante.
- **Dependências:** Link e Grid.
- **Variações permitidas:** image, icon, compact e featured.

### Brand Card

- **Objetivo:** destacar marcas e levar a páginas de marca.
- **Quando usar:** home, filtros, páginas de marca e guias de marcas.
- **Quando não usar:** para marcas sem página ou estoque relevante.
- **Conteúdo obrigatório:** nome da marca e link; logo quando disponível com qualidade.
- **Estados:** padrão, hover, foco, selected e unavailable.
- **Comportamento responsivo:** preservar legibilidade de logos e evitar cards grandes demais.
- **Requisitos de acessibilidade:** nome textual da marca mesmo com logo.
- **Dependências:** Link e Grid.
- **Variações permitidas:** logo, text, filter e featured.

### Environment Card

- **Objetivo:** representar ambientes para orientar escolha de ar-condicionado.
- **Quando usar:** Central de Climatização, home, guias e calculadora de BTUs.
- **Quando não usar:** como substituto de cálculo quando metragem e contexto são necessários.
- **Conteúdo obrigatório:** nome do ambiente e ação para ver recomendações ou iniciar ferramenta.
- **Estados:** padrão, hover, foco, selected e disabled.
- **Comportamento responsivo:** cartões simples, com ícones ou imagens leves.
- **Requisitos de acessibilidade:** rótulo textual e seleção anunciada.
- **Dependências:** Category Card, Environment Selector ou Guide Card.
- **Variações permitidas:** room, commercial, compact e tool-option.

### Product Badge

- **Objetivo:** destacar atributo comercial ou técnico relevante.
- **Quando usar:** promoção, lançamento, inverter, quente/frio, frete, destaque e disponibilidade.
- **Quando não usar:** para excesso de selos que poluem o card.
- **Conteúdo obrigatório:** texto curto e verdadeiro.
- **Estados:** default, promo, technical, stock, warning e success.
- **Comportamento responsivo:** no mobile limitar quantidade visível e evitar sobrepor informações essenciais.
- **Requisitos de acessibilidade:** não depender apenas de cor e ser legível.
- **Dependências:** tokens de cor.
- **Variações permitidas:** promo, technical, delivery, stock e trust.

### Filter Chip

- **Objetivo:** representar filtro aplicado ou opção rápida.
- **Quando usar:** categorias, busca, comparador e Central de Climatização.
- **Quando não usar:** filtros complexos que exigem grupo estruturado no drawer.
- **Conteúdo obrigatório:** rótulo e ação de remover quando aplicado.
- **Estados:** default, selected, removable, focus e disabled.
- **Comportamento responsivo:** quebrar em linhas ou rolagem horizontal acessível quando necessário.
- **Requisitos de acessibilidade:** botão real para remover e estado selecionado anunciado.
- **Dependências:** Cluster e Icon Button.
- **Variações permitidas:** selectable, removable, quick-filter e compact.

### Filter Drawer

- **Objetivo:** concentrar filtros em experiência mobile ou lateral.
- **Quando usar:** categorias e busca em telas pequenas ou quando filtros forem numerosos.
- **Quando não usar:** desktop simples com poucos filtros visíveis.
- **Conteúdo obrigatório:** título, grupos de filtros, aplicar, limpar e fechar.
- **Estados:** fechado, aberto, aplicando, com filtros ativos e erro.
- **Comportamento responsivo:** drawer mobile com foco preso; desktop pode ser sidebar.
- **Requisitos de acessibilidade:** foco gerenciado, labels, botões claros e contagem de filtros.
- **Dependências:** Checkbox, Radio, Select, Filter Chip e Button.
- **Variações permitidas:** mobile-drawer, desktop-sidebar, modal e inline.

### Sort Control

- **Objetivo:** alterar ordenação de listagens.
- **Quando usar:** categoria, busca, marca e reviews.
- **Quando não usar:** listagens pequenas em que ordenação não agrega valor.
- **Conteúdo obrigatório:** label e opções de ordenação compreensíveis.
- **Estados:** padrão, foco, loading, disabled e selected.
- **Comportamento responsivo:** select compacto no mobile.
- **Requisitos de acessibilidade:** label associado e mudança anunciada quando AJAX.
- **Dependências:** Select.
- **Variações permitidas:** select, segmented quando poucas opções e compact.

### Comparison Bar

- **Objetivo:** mostrar produtos selecionados para comparação e permitir iniciar comparação.
- **Quando usar:** categorias e busca com seleção de até três produtos.
- **Quando não usar:** quando houver menos de dois produtos selecionados, exceto aviso discreto.
- **Conteúdo obrigatório:** itens selecionados, limite, remover e CTA comparar.
- **Estados:** vazio, parcial, pronto, limite atingido, loading e erro.
- **Comportamento responsivo:** barra fixa ou painel compacto sem cobrir CTAs críticos.
- **Requisitos de acessibilidade:** seleção anunciada, foco em ações e limite comunicado.
- **Dependências:** Product Card, Checkbox, Button e Toast.
- **Variações permitidas:** sticky-bottom, inline, compact e drawer.

## 7. PRODUTO

### Product Gallery

- **Objetivo:** exibir imagens e mídia do produto com clareza.
- **Quando usar:** página de produto e visualização rápida.
- **Quando não usar:** cards simples de listagem.
- **Conteúdo obrigatório:** imagem principal, miniaturas, texto alternativo e controles quando houver múltiplas mídias.
- **Estados:** loading, ready, zoom, vídeo, erro de imagem e selected.
- **Comportamento responsivo:** imagem principal priorizada na primeira dobra, com gestos acessíveis no mobile.
- **Requisitos de acessibilidade:** alt adequado, controle por teclado e não depender de swipe exclusivamente.
- **Dependências:** Icon Button, Skeleton e Video Block quando houver vídeo.
- **Variações permitidas:** thumbnails, carousel-manual, zoom e video-enabled.

### Product Summary

- **Objetivo:** reunir informações principais para decisão de compra.
- **Quando usar:** página de produto.
- **Quando não usar:** listagens, onde Product Card é suficiente.
- **Conteúdo obrigatório:** nome, avaliação quando real, preço, parcelamento, CTA, entrega e estoque.
- **Estados:** padrão, variação pendente, indisponível, promoção e loading.
- **Comportamento responsivo:** primeira dobra limpa; CTA acessível no mobile.
- **Requisitos de acessibilidade:** headings corretos, labels para variações e feedback claro.
- **Dependências:** Price Block, Installment Block, Stock Status, Delivery Calculator, Add to Cart Button e Buy Now Button.
- **Variações permitidas:** default, service-aware, bundle e quick-view.

### Price Block

- **Objetivo:** exibir preço de forma clara e confiável.
- **Quando usar:** cards, página de produto, carrinho, resumo e recomendações.
- **Quando não usar:** quando produto não tem preço válido; usar estado apropriado sem esconder motivo.
- **Conteúdo obrigatório:** preço atual, preço anterior quando real, moeda e contexto de desconto.
- **Estados:** regular, sale, unavailable, loading e price-range.
- **Comportamento responsivo:** destaque suficiente sem competir com CTA.
- **Requisitos de acessibilidade:** preço lido de forma compreensível e não apenas visual.
- **Dependências:** dados WooCommerce.
- **Variações permitidas:** card, product, cart, checkout-summary e compact.

### Installment Block

- **Objetivo:** informar parcelamento sem esconder preço final.
- **Quando usar:** Product Card, Product Summary, Order Summary e Checkout.
- **Quando não usar:** quando condições não forem reais ou atualizadas.
- **Conteúdo obrigatório:** número de parcelas, valor, juros quando houver e condição.
- **Estados:** disponível, indisponível, loading e erro.
- **Comportamento responsivo:** texto curto no card e detalhado no produto/checkout.
- **Requisitos de acessibilidade:** texto legível e sem depender de abreviações ambíguas.
- **Dependências:** regras de pagamento reais.
- **Variações permitidas:** compact, detailed, checkout e tooltip-supported.

### Stock Status

- **Objetivo:** comunicar disponibilidade do produto.
- **Quando usar:** produto, card, carrinho e checkout.
- **Quando não usar:** para criar urgência artificial sem dado real.
- **Conteúdo obrigatório:** status e orientação quando indisponível.
- **Estados:** em estoque, baixo estoque, sob encomenda quando real, indisponível e loading.
- **Comportamento responsivo:** visível próximo ao CTA.
- **Requisitos de acessibilidade:** não depender apenas de cor.
- **Dependências:** WooCommerce estoque.
- **Variações permitidas:** inline, badge, detailed e cart-warning.

### Delivery Calculator

- **Objetivo:** calcular prazo, frete e disponibilidade por CEP.
- **Quando usar:** produto, carrinho e checkout.
- **Quando não usar:** antes de exibir preço ou como barreira para compra de equipamentos.
- **Conteúdo obrigatório:** CEP Field, botão calcular, resultado e mensagens de erro.
- **Estados:** vazio, consultando, disponível, indisponível, fora de cobertura para serviços e erro.
- **Comportamento responsivo:** formulário compacto e resultado legível no mobile.
- **Requisitos de acessibilidade:** feedback anunciado e instruções claras.
- **Dependências:** CEP Field, Alert/Validation Message e regras de entrega.
- **Variações permitidas:** product, cart, checkout e service-coverage.

### Product Benefits

- **Objetivo:** resumir diferenciais relevantes do produto.
- **Quando usar:** página de produto e cards quando houver espaço.
- **Quando não usar:** para repetir informações sem impacto na decisão.
- **Conteúdo obrigatório:** benefícios curtos, verdadeiros e verificáveis.
- **Estados:** padrão e loading quando vindo de dados externos.
- **Comportamento responsivo:** lista curta na primeira dobra; detalhes abaixo.
- **Requisitos de acessibilidade:** ícones decorativos ocultos quando redundantes.
- **Dependências:** Product Summary.
- **Variações permitidas:** icon-list, bullet-list, compact e detailed.

### Product Specifications

- **Objetivo:** apresentar dados técnicos detalhados.
- **Quando usar:** página de produto e comparador.
- **Quando não usar:** como bloco dominante na primeira dobra.
- **Conteúdo obrigatório:** atributos técnicos com rótulos e valores.
- **Estados:** completo, parcial, loading e indisponível.
- **Comportamento responsivo:** tabela pode virar lista no mobile.
- **Requisitos de acessibilidade:** estrutura semântica de tabela ou lista descritiva.
- **Dependências:** Tabs ou Accordion.
- **Variações permitidas:** table, definition-list, comparison e accordion.

### Product Reviews

- **Objetivo:** exibir avaliações reais e úteis.
- **Quando usar:** produto e listagens de reviews.
- **Quando não usar:** sem avaliações reais; usar Empty State honesto.
- **Conteúdo obrigatório:** nota, autor ou identificação permitida, data, texto e critérios quando existirem.
- **Estados:** com reviews, vazio, loading, erro e filtrado.
- **Comportamento responsivo:** cards ou lista legível, sem empurrar CTA principal.
- **Requisitos de acessibilidade:** estrelas com texto equivalente e navegação por teclado.
- **Dependências:** Pagination, Empty State e schema somente com dados válidos.
- **Variações permitidas:** summary, list, compact e detailed.

### Sticky Buy Bar Mobile

- **Objetivo:** manter compra acessível no celular após o primeiro scroll.
- **Quando usar:** página de produto mobile com produto comprável.
- **Quando não usar:** checkout, carrinho ou quando cobrir conteúdo/ações essenciais.
- **Conteúdo obrigatório:** preço resumido, CTA principal e estado de estoque/variação quando necessário.
- **Estados:** hidden, visible, loading, disabled, error e added.
- **Comportamento responsivo:** apenas mobile, respeitando safe areas e sem conflito com bottom navigation.
- **Requisitos de acessibilidade:** foco visível, ordem lógica e não prender leitor de tela.
- **Dependências:** Price Block, Buy Now Button, Add to Cart Button e Stock Status.
- **Variações permitidas:** buy-now, add-to-cart, with-price e service-aware.

## 8. CARRINHO E CHECKOUT

### Mini Cart

- **Objetivo:** mostrar resumo rápido do carrinho e caminho para checkout.
- **Quando usar:** header, drawer de carrinho e confirmação de adição.
- **Quando não usar:** como substituto da página de carrinho completa.
- **Conteúdo obrigatório:** itens, subtotal, quantidade, remover, ver carrinho e finalizar compra.
- **Estados:** vazio, com itens, loading, erro e item removido.
- **Comportamento responsivo:** drawer ou página dedicada no mobile sem cobrir mensagens críticas.
- **Requisitos de acessibilidade:** foco gerenciado, botões nomeados e alterações anunciadas.
- **Dependências:** Cart Item, Order Summary parcial e Checkout CTA.
- **Variações permitidas:** dropdown, drawer, compact e post-add.

### Cart Item

- **Objetivo:** representar item do carrinho com controles essenciais.
- **Quando usar:** mini cart, carrinho e resumo editável.
- **Quando não usar:** resumo final sem edição, onde Order Summary é melhor.
- **Conteúdo obrigatório:** imagem, nome, variações, preço, quantidade, subtotal e remover.
- **Estados:** padrão, atualizando, removido, erro de estoque, indisponível e desconto aplicado.
- **Comportamento responsivo:** empilhar dados no mobile mantendo quantidade e remover acessíveis.
- **Requisitos de acessibilidade:** botões claros, imagem com alt e feedback de atualização.
- **Dependências:** Quantity Selector, Price Block e Alert/Toast.
- **Variações permitidas:** mini, full, checkout-review e read-only.

### Order Summary

- **Objetivo:** sintetizar valores do pedido.
- **Quando usar:** carrinho, checkout, mini cart e pedido concluído.
- **Quando não usar:** para esconder detalhes importantes de itens.
- **Conteúdo obrigatório:** subtotal, descontos, frete, total, parcelas quando aplicável e CTA contextual.
- **Estados:** padrão, recalculando, cupom aplicado, frete pendente, erro e finalizado.
- **Comportamento responsivo:** sticky no desktop quando útil; no mobile claro e sem cobrir formulário.
- **Requisitos de acessibilidade:** valores anunciados claramente e mudanças comunicadas.
- **Dependências:** Coupon Field, Installment Block e Checkout CTA.
- **Variações permitidas:** cart, checkout, mini, confirmation e sticky-desktop.

### Coupon Field

- **Objetivo:** aplicar cupom de desconto.
- **Quando usar:** carrinho e checkout.
- **Quando não usar:** onde não houver política de cupom ativa.
- **Conteúdo obrigatório:** campo, botão aplicar, feedback e cupom aplicado/remover.
- **Estados:** vazio, aplicando, aplicado, inválido, expirado e removendo.
- **Comportamento responsivo:** pode ficar recolhido no mobile sem esconder desconto aplicado.
- **Requisitos de acessibilidade:** label, erro específico e anúncio de sucesso.
- **Dependências:** Input, Button e Validation Message.
- **Variações permitidas:** inline, collapsible e summary-integrated.

### Checkout Steps

- **Objetivo:** indicar progresso do checkout.
- **Quando usar:** checkout em múltiplas etapas.
- **Quando não usar:** checkout de página única onde etapas visuais criam ruído.
- **Conteúdo obrigatório:** etapas, etapa atual e estados concluídos.
- **Estados:** pending, current, completed, error e disabled.
- **Comportamento responsivo:** compacto no mobile com rótulo da etapa atual.
- **Requisitos de acessibilidade:** nav/ol semântico e etapa atual anunciada.
- **Dependências:** checkout WooCommerce.
- **Variações permitidas:** horizontal, vertical, compact e one-page-indicator.

### Address Form

- **Objetivo:** coletar endereço de entrega/cobrança com mínima fricção.
- **Quando usar:** checkout e conta do cliente.
- **Quando não usar:** antes de o usuário decidir comprar, salvo cálculo opcional de entrega.
- **Conteúdo obrigatório:** CEP, endereço, número, complemento, bairro, cidade, estado e validações necessárias.
- **Estados:** vazio, preenchido, autocompletando, erro, sucesso e fora de cobertura para serviço local.
- **Comportamento responsivo:** campos em uma coluna no mobile e autocomplete quando confiável.
- **Requisitos de acessibilidade:** labels reais, autocomplete, mensagens específicas e ordem lógica.
- **Dependências:** CEP Field, Input, Select e Validation Message.
- **Variações permitidas:** shipping, billing, service-address e compact.

### Payment Method Selector

- **Objetivo:** escolher forma de pagamento disponível.
- **Quando usar:** checkout.
- **Quando não usar:** antes do carrinho/checkout com valores indefinidos.
- **Conteúdo obrigatório:** métodos, custos/juros, parcelamento, instruções e estado selecionado.
- **Estados:** disponível, selecionado, indisponível, processando, erro e aguardando 3DS quando aplicável.
- **Comportamento responsivo:** opções em cards empilhados no mobile.
- **Requisitos de acessibilidade:** grupo de Radio acessível, instruções e erros anunciados.
- **Dependências:** Radio, Installment Block, 3DS Status Message e gateway real.
- **Variações permitidas:** card-radio, accordion-details, pix, card e boleto quando suportados.

### 3DS Status Message

- **Objetivo:** comunicar etapas de autenticação EMV 3DS de forma clara e transparente.
- **Quando usar:** checkout com pagamento por cartão quando integração 3DS estiver implementada e testada.
- **Quando não usar:** para afirmar integração pronta antes de implementação real.
- **Conteúdo obrigatório:** status atual, instrução e alternativa em caso de falha.
- **Estados:** iniciando, autenticando, aprovado, recusado, erro, expirado e fallback.
- **Comportamento responsivo:** mensagem próxima ao método de pagamento e sem ocultar CTA final.
- **Requisitos de acessibilidade:** status anunciado e foco gerenciado em desafio/modal.
- **Dependências:** Payment Method Selector, Alert e gateway Cielo futuro validado.
- **Variações permitidas:** inline, modal-status, challenge-wrapper e error.

### Checkout CTA

- **Objetivo:** concluir etapa ou finalizar pedido com clareza.
- **Quando usar:** carrinho, checkout e resumo de pedido.
- **Quando não usar:** para ações secundárias.
- **Conteúdo obrigatório:** rótulo orientado à ação, total próximo quando relevante e estado de processamento.
- **Estados:** enabled, loading, disabled, error e success.
- **Comportamento responsivo:** destacado no mobile sem cobrir campos ou mensagens.
- **Requisitos de acessibilidade:** botão real, foco visível e bloqueios explicados.
- **Dependências:** Button, Order Summary e validações do checkout.
- **Variações permitidas:** proceed-to-checkout, place-order, continue-step e sticky-mobile.

## 9. CENTRAL DE CLIMATIZAÇÃO

### BTU Calculator Step

- **Objetivo:** coletar dados por etapa para estimar capacidade em BTUs.
- **Quando usar:** ferramenta consultiva opcional da Central de Climatização.
- **Quando não usar:** como etapa obrigatória para comprar produto.
- **Conteúdo obrigatório:** pergunta, campos/opções, ajuda, progresso e ação de avançar/voltar.
- **Estados:** inicial, preenchido, erro, calculando e concluído.
- **Comportamento responsivo:** uma pergunta por vez no mobile quando simplificar a decisão.
- **Requisitos de acessibilidade:** labels, grupos semânticos, foco ao avançar e opção de pular.
- **Dependências:** Input, Radio, Select, Button e Recommendation Result.
- **Variações permitidas:** room-size, sun-exposure, people, appliances e review.

### Consumption Simulator

- **Objetivo:** estimar consumo de energia de forma educativa.
- **Quando usar:** Central de Climatização, produto e guias.
- **Quando não usar:** para prometer valores exatos sem base real.
- **Conteúdo obrigatório:** entradas de uso, premissas, resultado estimado e aviso de variação.
- **Estados:** vazio, simulando, resultado, erro e dados insuficientes.
- **Comportamento responsivo:** formulário curto e resultado destacado no mobile.
- **Requisitos de acessibilidade:** campos rotulados, unidades claras e resultado anunciado.
- **Dependências:** Input, Select, Validation Message e Recommendation Result opcional.
- **Variações permitidas:** compact, full-tool, product-context e comparison.

### Product Comparator

- **Objetivo:** comparar até três produtos de forma simples.
- **Quando usar:** categorias, busca e Central de Climatização.
- **Quando não usar:** com mais de três itens ou sem atributos comparáveis.
- **Conteúdo obrigatório:** produtos selecionados, atributos, diferenças e CTAs.
- **Estados:** vazio, um item, pronto, limite atingido, loading e erro.
- **Comportamento responsivo:** tabela vira cards comparativos ou rolagem controlada no mobile.
- **Requisitos de acessibilidade:** cabeçalhos claros, navegação por teclado e remoção acessível.
- **Dependências:** Comparison Bar, Product Card e Product Specifications.
- **Variações permitidas:** inline, full-page, drawer e tool-result.

### Environment Selector

- **Objetivo:** escolher ambiente para orientar recomendações.
- **Quando usar:** Central de Climatização, home e guias por ambiente.
- **Quando não usar:** como filtro obrigatório para compra direta.
- **Conteúdo obrigatório:** opções de ambiente, seleção atual e ação de continuar/ver produtos.
- **Estados:** padrão, selected, foco, disabled e loading.
- **Comportamento responsivo:** cards ou lista simples no mobile.
- **Requisitos de acessibilidade:** seleção anunciada e labels claros.
- **Dependências:** Environment Card, Radio ou Button.
- **Variações permitidas:** cards, segmented, list e quiz-step.

### Recommendation Result

- **Objetivo:** apresentar recomendação consultiva e produtos compatíveis.
- **Quando usar:** após calculadora, simulador, comparador ou seleção por ambiente.
- **Quando não usar:** sem dados suficientes ou como promessa absoluta.
- **Conteúdo obrigatório:** resumo da recomendação, critérios usados, produtos compatíveis e CTA para comprar/ver categoria.
- **Estados:** loading, success, partial, no-match e error.
- **Comportamento responsivo:** resultado principal e CTA visíveis antes de explicações longas.
- **Requisitos de acessibilidade:** resultado anunciado e critérios em texto claro.
- **Dependências:** Product Card, Alert, Button e Empty State.
- **Variações permitidas:** btu, consumption, comparator, environment e guide.

### Guide Card

- **Objetivo:** levar a conteúdo educativo ou ferramenta útil.
- **Quando usar:** Central de Climatização, blog, home e páginas de categoria.
- **Quando não usar:** para produto vendável, caso de Product Card.
- **Conteúdo obrigatório:** título, descrição curta, tipo de guia/ferramenta e link.
- **Estados:** padrão, hover, foco, featured e loading.
- **Comportamento responsivo:** card simples e legível, sem excesso de texto.
- **Requisitos de acessibilidade:** link descritivo e imagem com alt quando informativa.
- **Dependências:** Link, Category Card opcional.
- **Variações permitidas:** article, tool, featured, compact e environment.

## 10. CONTEÚDO

### Hero

- **Objetivo:** apresentar proposta principal da página e CTA prioritário.
- **Quando usar:** home, campanhas, categorias estratégicas e Central de Climatização.
- **Quando não usar:** com carrossel automático ou múltiplos CTAs concorrentes.
- **Conteúdo obrigatório:** título, subtítulo, CTA principal e imagem/apoio quando agregar valor.
- **Estados:** padrão, loading de imagem e campanha.
- **Comportamento responsivo:** mobile first, sem empurrar busca/compra para baixo excessivamente.
- **Requisitos de acessibilidade:** heading único coerente, contraste e imagem não essencial para compreensão.
- **Dependências:** Button, Container e Section.
- **Variações permitidas:** home, category, tool, campaign e editorial.

### Section Header

- **Objetivo:** introduzir seção com título, contexto e ação opcional.
- **Quando usar:** vitrines, guias, FAQs, reviews e blocos institucionais.
- **Quando não usar:** se o bloco já tiver heading suficiente e ação clara.
- **Conteúdo obrigatório:** título; descrição e link opcionais.
- **Estados:** padrão, centered, with-action e compact.
- **Comportamento responsivo:** ação pode ir abaixo do título no mobile.
- **Requisitos de acessibilidade:** nível de heading correto e link descritivo.
- **Dependências:** Link e Container.
- **Variações permitidas:** default, centered, action-right e compact.

### FAQ

- **Objetivo:** responder dúvidas comuns com conteúdo estruturado.
- **Quando usar:** produto, categoria, guias, serviços e checkout quando útil.
- **Quando não usar:** para esconder políticas críticas ou conteúdo essencial de compra.
- **Conteúdo obrigatório:** perguntas reais, respostas objetivas e schema somente quando válido.
- **Estados:** collapsed, expanded, loading e empty.
- **Comportamento responsivo:** Accordion acessível no mobile e desktop.
- **Requisitos de acessibilidade:** botões para perguntas, `aria-expanded` e ordem lógica.
- **Dependências:** Accordion e dados estruturados válidos quando aplicável.
- **Variações permitidas:** product, category, service, checkout e guide.

### Testimonial

- **Objetivo:** exibir prova social real.
- **Quando usar:** home, produto, serviços e páginas institucionais.
- **Quando não usar:** sem autorização ou fonte confiável.
- **Conteúdo obrigatório:** depoimento, identificação permitida e contexto/data quando disponível.
- **Estados:** padrão, featured, loading e empty.
- **Comportamento responsivo:** lista ou card único sem carrossel automático.
- **Requisitos de acessibilidade:** texto legível e controles manuais se houver rotação.
- **Dependências:** Card base futuro e Rating opcional quando real.
- **Variações permitidas:** card, quote, featured e compact.

### Trust Bar

- **Objetivo:** reforçar diferenciais de confiança e compra.
- **Quando usar:** home, produto, carrinho e checkout de forma discreta.
- **Quando não usar:** quando competir com CTA principal ou repetir informação já visível.
- **Conteúdo obrigatório:** até quatro mensagens curtas e verdadeiras.
- **Estados:** padrão, compact e checkout.
- **Comportamento responsivo:** virar lista curta ou rolagem controlada no mobile.
- **Requisitos de acessibilidade:** ícones decorativos ocultos e texto suficiente.
- **Dependências:** Cluster/Grid e ícones.
- **Variações permitidas:** delivery, support, payment, warranty e service-area.

### Blog Card

- **Objetivo:** apresentar conteúdo editorial e guias.
- **Quando usar:** blog, Central de Climatização e seções de conteúdo útil.
- **Quando não usar:** para ferramenta funcional, caso de Guide Card do tipo tool.
- **Conteúdo obrigatório:** título, resumo, categoria, data quando relevante e link.
- **Estados:** padrão, hover, foco, loading e featured.
- **Comportamento responsivo:** imagem e texto equilibrados; não prejudicar listagem de produtos.
- **Requisitos de acessibilidade:** link descritivo e alt adequado.
- **Dependências:** Link e Section Header.
- **Variações permitidas:** default, compact, featured e horizontal.

### Guide Card

- **Objetivo:** promover guia educativo em contexto de conteúdo.
- **Quando usar:** home, Central de Climatização, categorias e páginas de produto.
- **Quando não usar:** para item de ferramenta interativa quando precisar de estados específicos da Central.
- **Conteúdo obrigatório:** título, descrição, tema, nível de ajuda e link.
- **Estados:** padrão, hover, foco, featured e related.
- **Comportamento responsivo:** manter leitura rápida e CTA claro.
- **Requisitos de acessibilidade:** estrutura de heading quando em lista e link descritivo.
- **Dependências:** Link, Blog Card ou Section Header conforme contexto.
- **Variações permitidas:** related-guide, buying-guide, btu-guide, brand-guide e compact.

### Video Block

- **Objetivo:** incorporar vídeo explicativo sem prejudicar performance.
- **Quando usar:** guias, produto, instalação explicativa e conteúdos educativos.
- **Quando não usar:** como autoplay intrusivo ou conteúdo essencial sem alternativa textual.
- **Conteúdo obrigatório:** título/descrição, thumbnail, controle de play e alternativa textual ou resumo.
- **Estados:** thumbnail, loading, playing, paused, error e reduced-motion.
- **Comportamento responsivo:** proporção preservada e carregamento preguiçoso adequado.
- **Requisitos de acessibilidade:** controles acessíveis, legendas quando necessárias e sem autoplay com som.
- **Dependências:** mídia externa aprovada, Skeleton opcional e Button/Icon Button.
- **Variações permitidas:** embedded, modal, inline-guide e product-video.
