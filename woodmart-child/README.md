# Bom Ar Condicionado — WoodMart Child Theme

Tema filho WordPress para WooCommerce criado para centralizar as customizações da loja Bom Ar Condicionado sem alterar arquivos do tema pai WoodMart.

## Estrutura

```text
woodmart-child/
├── assets/
│   ├── css/
│   │   ├── main.css
│   │   ├── base/
│   │   ├── layout/
│   │   ├── components/
│   │   ├── pages/
│   │   └── vendors/
│   ├── js/
│   │   ├── main.js
│   │   ├── modules/
│   │   ├── pages/
│   │   └── vendors/
│   ├── images/
│   ├── icons/
│   ├── fonts/
│   └── videos/
├── components/
│   ├── header/
│   ├── footer/
│   ├── cards/
│   ├── filters/
│   ├── search/
│   ├── product/
│   ├── checkout/
│   └── ui/
├── inc/
│   ├── seo/
│   ├── performance/
│   ├── integrations/
│   ├── helpers/
│   ├── hooks/
│   ├── admin/
│   └── security/
├── templates/
├── woocommerce/
├── languages/
├── docs/
├── tests/
├── functions.php
├── style.css
├── screenshot.png (será adicionado posteriormente)
└── README.md
```

## Finalidade dos arquivos principais

- `style.css`: cabeçalho obrigatório do tema filho. Define o nome do tema, o `Template: woodmart`, domínio de tradução e metadados básicos.
- `functions.php`: ponto inicial de configuração do tema filho. Define constantes, suporte ao WooCommerce, recursos de SEO nativos do WordPress e carregamento versionado de assets.
- `screenshot.png`: imagem de pré-visualização do tema no WordPress. Será adicionada posteriormente.
- `README.md`: documentação da estrutura, diretrizes e finalidade dos grupos de pastas.

## Finalidade dos grupos de pastas

- `assets/`: arquivos estáticos próprios do tema filho.
- `assets/css/main.css`: ponto de entrada CSS atual, preservado para manter o carregamento existente.
- `assets/css/base/`: estilos globais futuros, como reset, variáveis e tipografia.
- `assets/css/layout/`: estilos estruturais futuros, como grids, containers e seções base.
- `assets/css/components/`: estilos futuros de componentes reutilizáveis.
- `assets/css/pages/`: estilos futuros específicos de páginas ou contextos.
- `assets/css/vendors/`: estilos futuros de bibliotecas externas, quando necessários.
- `assets/js/main.js`: ponto de entrada JavaScript atual, preservado para manter o carregamento existente.
- `assets/js/modules/`: módulos JavaScript reutilizáveis futuros.
- `assets/js/pages/`: scripts futuros específicos de páginas ou fluxos.
- `assets/js/vendors/`: scripts futuros de bibliotecas externas, quando necessários.
- `assets/images/`: imagens próprias do tema filho.
- `assets/icons/`: ícones próprios do tema filho.
- `assets/fonts/`: fontes próprias do tema filho, quando necessárias.
- `assets/videos/`: vídeos próprios do tema filho, quando necessários.
- `components/`: partes reutilizáveis de template PHP organizadas por domínio visual.
- `components/header/`: componentes futuros do cabeçalho.
- `components/footer/`: componentes futuros do rodapé.
- `components/cards/`: componentes futuros de cards.
- `components/filters/`: componentes futuros de filtros de catálogo ou busca.
- `components/search/`: componentes futuros de busca.
- `components/product/`: componentes futuros relacionados a produtos WooCommerce.
- `components/checkout/`: componentes futuros relacionados ao checkout WooCommerce.
- `components/ui/`: componentes futuros genéricos de interface.
- `inc/`: arquivos PHP auxiliares e organização de customizações futuras.
- `inc/seo/`: customizações futuras relacionadas a SEO.
- `inc/performance/`: customizações futuras relacionadas a performance.
- `inc/integrations/`: integrações futuras com serviços, plugins ou APIs.
- `inc/helpers/`: funções auxiliares futuras.
- `inc/hooks/`: organização futura de actions e filters do WordPress, WooCommerce ou WoodMart.
- `inc/admin/`: customizações futuras para o painel administrativo.
- `inc/security/`: customizações futuras relacionadas a segurança.
- `templates/`: templates customizados do tema filho.
- `woocommerce/`: sobrescritas futuras de templates WooCommerce, mantendo o tema WoodMart intacto.
- `languages/`: arquivos de tradução do tema filho.
- `docs/`: documentação técnica, decisões arquiteturais e guias internos.
- `tests/`: testes e verificações futuras do tema filho.

## Diretrizes

- Não alterar arquivos do tema WoodMart.
- Manter toda customização dentro deste tema filho.
- Seguir WordPress Coding Standards em arquivos PHP.
- Carregar assets apenas quando existirem e com versionamento por `filemtime()` para facilitar cache busting.
- Priorizar recursos nativos do WordPress e WooCommerce para compatibilidade, SEO e performance.
- Não implementar layout ou funcionalidades sem demanda específica.
