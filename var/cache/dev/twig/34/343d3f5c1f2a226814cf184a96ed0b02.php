<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Doctrine/migration.tpl */
class __TwigTemplate_3e5d5a24347fd06c0419c574c1989634 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Doctrine/migration.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Doctrine/migration.tpl"));

        // line 1
        echo "<?php

declare(strict_types=1);

// phpcs:ignoreFile
namespace <namespace>;

use Doctrine\\DBAL\\Exception;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class <className> extends AbstractMigration
{
    /**
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public function getDescription(): string
    {
        return 'TODO: Describe reason for this migration';
    }

    /**
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public function isTransactional(): bool
    {
        return false;
    }

    /**
     * @throws Exception
     */
    public function up(Schema \$schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        \$this->abortIf(
            \$this->connection->getDatabasePlatform()->getName() !== 'mysql',
            'Migration can only be executed safely on \\'mysql\\'.'
        );

<up>
    }

    /**
     * @noinspection PhpMissingParentCallCommonInspection
     *
     * @throws Exception
     */
    public function down(Schema \$schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        \$this->abortIf(
            \$this->connection->getDatabasePlatform()->getName() !== 'mysql',
            'Migration can only be executed safely on \\'mysql\\'.'
        );

<down>
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Doctrine/migration.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

// phpcs:ignoreFile
namespace <namespace>;

use Doctrine\\DBAL\\Exception;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class <className> extends AbstractMigration
{
    /**
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public function getDescription(): string
    {
        return 'TODO: Describe reason for this migration';
    }

    /**
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public function isTransactional(): bool
    {
        return false;
    }

    /**
     * @throws Exception
     */
    public function up(Schema \$schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        \$this->abortIf(
            \$this->connection->getDatabasePlatform()->getName() !== 'mysql',
            'Migration can only be executed safely on \\'mysql\\'.'
        );

<up>
    }

    /**
     * @noinspection PhpMissingParentCallCommonInspection
     *
     * @throws Exception
     */
    public function down(Schema \$schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        \$this->abortIf(
            \$this->connection->getDatabasePlatform()->getName() !== 'mysql',
            'Migration can only be executed safely on \\'mysql\\'.'
        );

<down>
    }
}
", "Doctrine/migration.tpl", "/var/www/html/templates/Doctrine/migration.tpl");
    }
}
