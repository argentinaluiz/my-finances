## Commads phinx 

  - vendor/bin/phinx create nameTable
  - vendor/bin/phinx migrate [gerar tabelas] === flag -e nameOfConfigDatabase (dev/prod)
  - vendor/bin/phinx rollback [desfazer tabela]
  - vendor/bin/phinx rollback -t=timestamp [desfazer tabela especifica]
  - vendor/bin/phinx rollback -t=0 [desfazer todas as tabelas ]


## Gerar seeds

  - vendor/bin/phinx seed:create NameDaSeed
  - vendor/bin/phinx seed:run