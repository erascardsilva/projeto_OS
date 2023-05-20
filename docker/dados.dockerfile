#imagem
FROM  mysql:latest

# mantedor do docker
LABEL maintainer : "Erasmo Cardoso"

# define senha
ENV MYSQL_ROOT_PASSWORD=p@ssword

# Expor a porta padrão do MySQL
EXPOSE 3300

# Define o nome do contêiner
CMD ["mysqld", "--default-authentication-plugin=mysql_native_password", "--character-set-server=utf8mb4", "--collation-server=utf8mb4_unicode_ci", "--port=3306", "--bind-address=0.0.0.0", "--skip-host-cache", "--skip-name-resolve", "--lower_case_table_names=1", "--log-output=FILE", "--server-id=1", "--binlog-format=ROW", "--log-bin=/var/lib/mysql/mysql-bin", "--datadir=/var/lib/mysql", "--transaction-isolation=READ-COMMITTED", "--explicit_defaults_for_timestamp"]

