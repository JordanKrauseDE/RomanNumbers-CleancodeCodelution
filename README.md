# Task 
Write a program, which converts from normal decimal numbers to roman numbers.
Example:
```
1 → I
10 → X
7 → VII
etc.
```
It is not necessary to support numbers bigger than 3000.
Note: You can not write „IM“ for 999. Wikipedia says: modern roman numerals … are written by
expressing each digit separately starting with the left most digit and skipping any digit with a value of
zero. To see this in practice, consider the … example of 1990:

`1990 → 1000 = M, 900 = CM, 90 = XC. Result: MCMXC.`

`2008 → 2000 = MM, 8 = VIII. Result: MMVIII.`

```
romanNumbers
├─ README.md
├─ composer.json
├─ src
│  ├─ RomanNumbers
│  │  ├─ Contracts
│  │  │  └─ RomanNumberContract.php
│  │  ├─ Digits
│  │  │  ├─ DecimalDigdit.php
│  │  │  ├─ HundredDigit.php
│  │  │  ├─ SingleDigit.php
│  │  │  ├─ TensDigit.php
│  │  │  └─ ThousandDigit.php
│  │  └─ RomanNumber.php
│  └─ examples
│     └─ index.php
├─ tests
│  └─ RomanNumberContractTest.php
└─ vendor
   ├─ autoload.php
   ├─ behat
   │  ├─ behat
   │  │  ├─ .editorconfig
   │  │  ├─ .php-cs-fixer.dist.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ GitHub_Lockup_Dark.svg
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ behat.yml.dist
   │  │  ├─ bin
   │  │  │  └─ behat
   │  │  ├─ composer.json
   │  │  ├─ i18n.php
   │  │  ├─ phpstan.dist.neon
   │  │  ├─ rector.php
   │  │  └─ src
   │  │     └─ Behat
   │  │        ├─ Behat
   │  │        │  ├─ ApplicationFactory.php
   │  │        │  ├─ Context
   │  │        │  │  ├─ Annotation
   │  │        │  │  │  ├─ AnnotationReader.php
   │  │        │  │  │  └─ DocBlockHelper.php
   │  │        │  │  ├─ Argument
   │  │        │  │  │  ├─ ArgumentResolver.php
   │  │        │  │  │  ├─ ArgumentResolverFactory.php
   │  │        │  │  │  ├─ CompositeArgumentResolverFactory.php
   │  │        │  │  │  ├─ CompositeFactory.php
   │  │        │  │  │  ├─ NullFactory.php
   │  │        │  │  │  ├─ SuiteScopedResolverFactory.php
   │  │        │  │  │  └─ SuiteScopedResolverFactoryAdapter.php
   │  │        │  │  ├─ Attribute
   │  │        │  │  │  └─ AttributeReader.php
   │  │        │  │  ├─ Cli
   │  │        │  │  │  ├─ ContextSnippetsController.php
   │  │        │  │  │  └─ InteractiveContextIdentifier.php
   │  │        │  │  ├─ Context.php
   │  │        │  │  ├─ ContextClass
   │  │        │  │  │  ├─ ClassGenerator.php
   │  │        │  │  │  ├─ ClassResolver.php
   │  │        │  │  │  └─ SimpleClassGenerator.php
   │  │        │  │  ├─ ContextFactory.php
   │  │        │  │  ├─ CustomSnippetAcceptingContext.php
   │  │        │  │  ├─ Environment
   │  │        │  │  │  ├─ ContextEnvironment.php
   │  │        │  │  │  ├─ Handler
   │  │        │  │  │  │  └─ ContextEnvironmentHandler.php
   │  │        │  │  │  ├─ InitializedContextEnvironment.php
   │  │        │  │  │  ├─ Reader
   │  │        │  │  │  │  └─ ContextEnvironmentReader.php
   │  │        │  │  │  └─ UninitializedContextEnvironment.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ ContextException.php
   │  │        │  │  │  ├─ ContextNotFoundException.php
   │  │        │  │  │  ├─ UnknownTranslationResourceException.php
   │  │        │  │  │  └─ WrongContextClassException.php
   │  │        │  │  ├─ Initializer
   │  │        │  │  │  └─ ContextInitializer.php
   │  │        │  │  ├─ Reader
   │  │        │  │  │  ├─ AnnotatedContextReader.php
   │  │        │  │  │  ├─ AttributeContextReader.php
   │  │        │  │  │  ├─ ContextReader.php
   │  │        │  │  │  ├─ ContextReaderCachedPerContext.php
   │  │        │  │  │  ├─ ContextReaderCachedPerSuite.php
   │  │        │  │  │  └─ TranslatableContextReader.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ ContextExtension.php
   │  │        │  │  ├─ Snippet
   │  │        │  │  │  ├─ Appender
   │  │        │  │  │  │  └─ ContextSnippetAppender.php
   │  │        │  │  │  ├─ ContextSnippet.php
   │  │        │  │  │  └─ Generator
   │  │        │  │  │     ├─ AggregateContextIdentifier.php
   │  │        │  │  │     ├─ AggregatePatternIdentifier.php
   │  │        │  │  │     ├─ CachedContextIdentifier.php
   │  │        │  │  │     ├─ CannotGenerateStepPatternException.php
   │  │        │  │  │     ├─ ContextInterfaceBasedContextIdentifier.php
   │  │        │  │  │     ├─ ContextInterfaceBasedPatternIdentifier.php
   │  │        │  │  │     ├─ ContextSnippetGenerator.php
   │  │        │  │  │     ├─ FixedContextIdentifier.php
   │  │        │  │  │     ├─ FixedPatternIdentifier.php
   │  │        │  │  │     ├─ PatternIdentifier.php
   │  │        │  │  │     └─ TargetContextIdentifier.php
   │  │        │  │  ├─ SnippetAcceptingContext.php
   │  │        │  │  ├─ Suite
   │  │        │  │  │  └─ Setup
   │  │        │  │  │     └─ SuiteWithContextsSetup.php
   │  │        │  │  └─ TranslatableContext.php
   │  │        │  ├─ Definition
   │  │        │  │  ├─ Call
   │  │        │  │  │  ├─ DefinitionCall.php
   │  │        │  │  │  ├─ Given.php
   │  │        │  │  │  ├─ RuntimeDefinition.php
   │  │        │  │  │  ├─ Then.php
   │  │        │  │  │  └─ When.php
   │  │        │  │  ├─ Cli
   │  │        │  │  │  ├─ AvailableDefinitionsController.php
   │  │        │  │  │  └─ UnusedDefinitionsController.php
   │  │        │  │  ├─ Context
   │  │        │  │  │  ├─ Annotation
   │  │        │  │  │  │  └─ DefinitionAnnotationReader.php
   │  │        │  │  │  └─ Attribute
   │  │        │  │  │     └─ DefinitionAttributeReader.php
   │  │        │  │  ├─ Definition.php
   │  │        │  │  ├─ DefinitionFinder.php
   │  │        │  │  ├─ DefinitionRepository.php
   │  │        │  │  ├─ DefinitionWriter.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ AmbiguousMatchException.php
   │  │        │  │  │  ├─ DefinitionException.php
   │  │        │  │  │  ├─ InvalidPatternException.php
   │  │        │  │  │  ├─ RedundantStepException.php
   │  │        │  │  │  ├─ SearchException.php
   │  │        │  │  │  ├─ UnknownPatternException.php
   │  │        │  │  │  └─ UnsupportedPatternTypeException.php
   │  │        │  │  ├─ Pattern
   │  │        │  │  │  ├─ Pattern.php
   │  │        │  │  │  ├─ PatternTransformer.php
   │  │        │  │  │  ├─ Policy
   │  │        │  │  │  │  ├─ PatternPolicy.php
   │  │        │  │  │  │  ├─ RegexPatternPolicy.php
   │  │        │  │  │  │  └─ TurnipPatternPolicy.php
   │  │        │  │  │  ├─ SimpleStepMethodNameSuggester.php
   │  │        │  │  │  └─ StepMethodNameSuggester.php
   │  │        │  │  ├─ Printer
   │  │        │  │  │  ├─ ConsoleDefinitionInformationPrinter.php
   │  │        │  │  │  ├─ ConsoleDefinitionListPrinter.php
   │  │        │  │  │  ├─ ConsoleDefinitionPrinter.php
   │  │        │  │  │  ├─ DefinitionPrinter.php
   │  │        │  │  │  └─ UnusedDefinitionPrinter.php
   │  │        │  │  ├─ Search
   │  │        │  │  │  ├─ RepositorySearchEngine.php
   │  │        │  │  │  └─ SearchEngine.php
   │  │        │  │  ├─ SearchResult.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ DefinitionExtension.php
   │  │        │  │  └─ Translator
   │  │        │  │     ├─ DefinitionTranslator.php
   │  │        │  │     ├─ TranslatedDefinition.php
   │  │        │  │     ├─ Translator.php
   │  │        │  │     └─ TranslatorInterface.php
   │  │        │  ├─ EventDispatcher
   │  │        │  │  ├─ Cli
   │  │        │  │  │  └─ StopOnFailureController.php
   │  │        │  │  ├─ Event
   │  │        │  │  │  ├─ AfterBackgroundSetup.php
   │  │        │  │  │  ├─ AfterBackgroundTested.php
   │  │        │  │  │  ├─ AfterFeatureSetup.php
   │  │        │  │  │  ├─ AfterFeatureTested.php
   │  │        │  │  │  ├─ AfterOutlineSetup.php
   │  │        │  │  │  ├─ AfterOutlineTested.php
   │  │        │  │  │  ├─ AfterScenarioSetup.php
   │  │        │  │  │  ├─ AfterScenarioTested.php
   │  │        │  │  │  ├─ AfterStepSetup.php
   │  │        │  │  │  ├─ AfterStepTested.php
   │  │        │  │  │  ├─ BackgroundTested.php
   │  │        │  │  │  ├─ BeforeBackgroundTeardown.php
   │  │        │  │  │  ├─ BeforeBackgroundTested.php
   │  │        │  │  │  ├─ BeforeFeatureTeardown.php
   │  │        │  │  │  ├─ BeforeFeatureTested.php
   │  │        │  │  │  ├─ BeforeOutlineTeardown.php
   │  │        │  │  │  ├─ BeforeOutlineTested.php
   │  │        │  │  │  ├─ BeforeScenarioTeardown.php
   │  │        │  │  │  ├─ BeforeScenarioTested.php
   │  │        │  │  │  ├─ BeforeStepTeardown.php
   │  │        │  │  │  ├─ BeforeStepTested.php
   │  │        │  │  │  ├─ ExampleTested.php
   │  │        │  │  │  ├─ FeatureTested.php
   │  │        │  │  │  ├─ GherkinNodeTested.php
   │  │        │  │  │  ├─ OutlineTested.php
   │  │        │  │  │  ├─ ScenarioLikeTested.php
   │  │        │  │  │  ├─ ScenarioTested.php
   │  │        │  │  │  └─ StepTested.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ EventDispatcherExtension.php
   │  │        │  │  └─ Tester
   │  │        │  │     ├─ EventDispatchingBackgroundTester.php
   │  │        │  │     ├─ EventDispatchingFeatureTester.php
   │  │        │  │     ├─ EventDispatchingOutlineTester.php
   │  │        │  │     ├─ EventDispatchingScenarioTester.php
   │  │        │  │     ├─ EventDispatchingStepTester.php
   │  │        │  │     └─ TickingStepTester.php
   │  │        │  ├─ Gherkin
   │  │        │  │  ├─ Cli
   │  │        │  │  │  ├─ FilterController.php
   │  │        │  │  │  └─ SyntaxController.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ GherkinExtension.php
   │  │        │  │  ├─ Specification
   │  │        │  │  │  ├─ LazyFeatureIterator.php
   │  │        │  │  │  └─ Locator
   │  │        │  │  │     ├─ FilesystemFeatureLocator.php
   │  │        │  │  │     ├─ FilesystemRerunScenariosListLocator.php
   │  │        │  │  │     └─ FilesystemScenariosListLocator.php
   │  │        │  │  └─ Suite
   │  │        │  │     └─ Setup
   │  │        │  │        └─ SuiteWithPathsSetup.php
   │  │        │  ├─ HelperContainer
   │  │        │  │  ├─ Argument
   │  │        │  │  │  ├─ AutowiringResolver.php
   │  │        │  │  │  ├─ ServicesResolver.php
   │  │        │  │  │  └─ ServicesResolverFactory.php
   │  │        │  │  ├─ ArgumentAutowirer.php
   │  │        │  │  ├─ BuiltInServiceContainer.php
   │  │        │  │  ├─ Call
   │  │        │  │  │  └─ Filter
   │  │        │  │  │     └─ ServicesResolver.php
   │  │        │  │  ├─ Environment
   │  │        │  │  │  └─ ServiceContainerEnvironment.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ HelperContainerException.php
   │  │        │  │  │  ├─ ServiceNotFoundException.php
   │  │        │  │  │  ├─ UnsupportedCallException.php
   │  │        │  │  │  ├─ WrongContainerClassException.php
   │  │        │  │  │  └─ WrongServicesConfigurationException.php
   │  │        │  │  └─ ServiceContainer
   │  │        │  │     └─ HelperContainerExtension.php
   │  │        │  ├─ Hook
   │  │        │  │  ├─ Call
   │  │        │  │  │  ├─ AfterFeature.php
   │  │        │  │  │  ├─ AfterScenario.php
   │  │        │  │  │  ├─ AfterStep.php
   │  │        │  │  │  ├─ BeforeFeature.php
   │  │        │  │  │  ├─ BeforeScenario.php
   │  │        │  │  │  ├─ BeforeStep.php
   │  │        │  │  │  ├─ RuntimeFeatureHook.php
   │  │        │  │  │  ├─ RuntimeScenarioHook.php
   │  │        │  │  │  └─ RuntimeStepHook.php
   │  │        │  │  ├─ Context
   │  │        │  │  │  ├─ Annotation
   │  │        │  │  │  │  └─ HookAnnotationReader.php
   │  │        │  │  │  └─ Attribute
   │  │        │  │  │     └─ HookAttributeReader.php
   │  │        │  │  ├─ Scope
   │  │        │  │  │  ├─ AfterFeatureScope.php
   │  │        │  │  │  ├─ AfterScenarioScope.php
   │  │        │  │  │  ├─ AfterStepScope.php
   │  │        │  │  │  ├─ BeforeFeatureScope.php
   │  │        │  │  │  ├─ BeforeScenarioScope.php
   │  │        │  │  │  ├─ BeforeStepScope.php
   │  │        │  │  │  ├─ FeatureScope.php
   │  │        │  │  │  ├─ ScenarioScope.php
   │  │        │  │  │  └─ StepScope.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ HookExtension.php
   │  │        │  │  └─ Tester
   │  │        │  │     ├─ HookableFeatureTester.php
   │  │        │  │     ├─ HookableScenarioTester.php
   │  │        │  │     └─ HookableStepTester.php
   │  │        │  ├─ Output
   │  │        │  │  ├─ Exception
   │  │        │  │  │  └─ NodeVisitorNotFoundException.php
   │  │        │  │  ├─ Node
   │  │        │  │  │  ├─ EventListener
   │  │        │  │  │  │  ├─ AST
   │  │        │  │  │  │  │  ├─ FeatureListener.php
   │  │        │  │  │  │  │  ├─ OutlineListener.php
   │  │        │  │  │  │  │  ├─ OutlineTableListener.php
   │  │        │  │  │  │  │  ├─ ScenarioNodeListener.php
   │  │        │  │  │  │  │  ├─ StepListener.php
   │  │        │  │  │  │  │  └─ SuiteListener.php
   │  │        │  │  │  │  ├─ Flow
   │  │        │  │  │  │  │  ├─ FireOnlySiblingsListener.php
   │  │        │  │  │  │  │  ├─ FirstBackgroundFiresFirstListener.php
   │  │        │  │  │  │  │  └─ OnlyFirstBackgroundFiresListener.php
   │  │        │  │  │  │  ├─ JUnit
   │  │        │  │  │  │  │  ├─ JUnitDurationListener.php
   │  │        │  │  │  │  │  ├─ JUnitFeatureElementListener.php
   │  │        │  │  │  │  │  └─ JUnitOutlineStoreListener.php
   │  │        │  │  │  │  └─ Statistics
   │  │        │  │  │  │     ├─ HookStatsListener.php
   │  │        │  │  │  │     ├─ ScenarioStatsListener.php
   │  │        │  │  │  │     ├─ StatisticsListener.php
   │  │        │  │  │  │     └─ StepStatsListener.php
   │  │        │  │  │  └─ Printer
   │  │        │  │  │     ├─ CounterPrinter.php
   │  │        │  │  │     ├─ ExamplePrinter.php
   │  │        │  │  │     ├─ ExampleRowPrinter.php
   │  │        │  │  │     ├─ FeaturePrinter.php
   │  │        │  │  │     ├─ Helper
   │  │        │  │  │     │  ├─ ResultToStringConverter.php
   │  │        │  │  │     │  ├─ StepTextPainter.php
   │  │        │  │  │     │  └─ WidthCalculator.php
   │  │        │  │  │     ├─ JUnit
   │  │        │  │  │     │  ├─ JUnitFeaturePrinter.php
   │  │        │  │  │     │  ├─ JUnitScenarioPrinter.php
   │  │        │  │  │     │  ├─ JUnitSetupPrinter.php
   │  │        │  │  │     │  ├─ JUnitStepPrinter.php
   │  │        │  │  │     │  └─ JUnitSuitePrinter.php
   │  │        │  │  │     ├─ ListPrinter.php
   │  │        │  │  │     ├─ OutlinePrinter.php
   │  │        │  │  │     ├─ OutlineTablePrinter.php
   │  │        │  │  │     ├─ Pretty
   │  │        │  │  │     │  ├─ PrettyExamplePrinter.php
   │  │        │  │  │     │  ├─ PrettyExampleRowPrinter.php
   │  │        │  │  │     │  ├─ PrettyFeaturePrinter.php
   │  │        │  │  │     │  ├─ PrettyOutlinePrinter.php
   │  │        │  │  │     │  ├─ PrettyOutlineTablePrinter.php
   │  │        │  │  │     │  ├─ PrettyPathPrinter.php
   │  │        │  │  │     │  ├─ PrettyScenarioPrinter.php
   │  │        │  │  │     │  ├─ PrettySetupPrinter.php
   │  │        │  │  │     │  ├─ PrettySkippedStepPrinter.php
   │  │        │  │  │     │  ├─ PrettyStatisticsPrinter.php
   │  │        │  │  │     │  └─ PrettyStepPrinter.php
   │  │        │  │  │     ├─ Progress
   │  │        │  │  │     │  ├─ ProgressStatisticsPrinter.php
   │  │        │  │  │     │  └─ ProgressStepPrinter.php
   │  │        │  │  │     ├─ ScenarioPrinter.php
   │  │        │  │  │     ├─ SetupPrinter.php
   │  │        │  │  │     ├─ StatisticsPrinter.php
   │  │        │  │  │     ├─ StepPrinter.php
   │  │        │  │  │     └─ SuitePrinter.php
   │  │        │  │  ├─ Printer
   │  │        │  │  │  ├─ ConsoleOutputFactory.php
   │  │        │  │  │  └─ Formatter
   │  │        │  │  │     └─ ConsoleFormatter.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ Formatter
   │  │        │  │  │     ├─ JUnitFormatterFactory.php
   │  │        │  │  │     ├─ PrettyFormatterFactory.php
   │  │        │  │  │     └─ ProgressFormatterFactory.php
   │  │        │  │  └─ Statistics
   │  │        │  │     ├─ HookStat.php
   │  │        │  │     ├─ PhaseStatistics.php
   │  │        │  │     ├─ ScenarioStat.php
   │  │        │  │     ├─ Statistics.php
   │  │        │  │     ├─ StepStat.php
   │  │        │  │     ├─ StepStatV2.php
   │  │        │  │     └─ TotalStatistics.php
   │  │        │  ├─ Snippet
   │  │        │  │  ├─ AggregateSnippet.php
   │  │        │  │  ├─ Appender
   │  │        │  │  │  └─ SnippetAppender.php
   │  │        │  │  ├─ Cli
   │  │        │  │  │  └─ SnippetsController.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ EnvironmentSnippetGenerationException.php
   │  │        │  │  │  └─ SnippetException.php
   │  │        │  │  ├─ Generator
   │  │        │  │  │  └─ SnippetGenerator.php
   │  │        │  │  ├─ Printer
   │  │        │  │  │  ├─ ConsoleSnippetPrinter.php
   │  │        │  │  │  └─ SnippetPrinter.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ SnippetExtension.php
   │  │        │  │  ├─ Snippet.php
   │  │        │  │  ├─ SnippetRegistry.php
   │  │        │  │  ├─ SnippetRepository.php
   │  │        │  │  ├─ SnippetWriter.php
   │  │        │  │  └─ UndefinedStep.php
   │  │        │  ├─ Tester
   │  │        │  │  ├─ BackgroundTester.php
   │  │        │  │  ├─ Cli
   │  │        │  │  │  └─ RerunController.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ FeatureHasNoBackgroundException.php
   │  │        │  │  │  ├─ PendingException.php
   │  │        │  │  │  └─ Stringer
   │  │        │  │  │     └─ PendingExceptionStringer.php
   │  │        │  │  ├─ OutlineTester.php
   │  │        │  │  ├─ Result
   │  │        │  │  │  ├─ DefinedStepResult.php
   │  │        │  │  │  ├─ ExecutedStepResult.php
   │  │        │  │  │  ├─ FailedStepSearchResult.php
   │  │        │  │  │  ├─ SkippedStepResult.php
   │  │        │  │  │  ├─ StepResult.php
   │  │        │  │  │  └─ UndefinedStepResult.php
   │  │        │  │  ├─ Runtime
   │  │        │  │  │  ├─ IsolatingScenarioTester.php
   │  │        │  │  │  ├─ RuntimeBackgroundTester.php
   │  │        │  │  │  ├─ RuntimeFeatureTester.php
   │  │        │  │  │  ├─ RuntimeOutlineTester.php
   │  │        │  │  │  ├─ RuntimeScenarioTester.php
   │  │        │  │  │  └─ RuntimeStepTester.php
   │  │        │  │  ├─ ScenarioTester.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ TesterExtension.php
   │  │        │  │  ├─ StepContainerTester.php
   │  │        │  │  └─ StepTester.php
   │  │        │  ├─ Transformation
   │  │        │  │  ├─ Call
   │  │        │  │  │  ├─ Filter
   │  │        │  │  │  │  └─ DefinitionArgumentsTransformer.php
   │  │        │  │  │  ├─ RuntimeTransformation.php
   │  │        │  │  │  └─ TransformationCall.php
   │  │        │  │  ├─ Context
   │  │        │  │  │  ├─ Annotation
   │  │        │  │  │  │  └─ TransformationAnnotationReader.php
   │  │        │  │  │  ├─ Attribute
   │  │        │  │  │  │  └─ TransformationAttributeReader.php
   │  │        │  │  │  └─ Factory
   │  │        │  │  │     └─ TransformationCalleeFactory.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ TransformationException.php
   │  │        │  │  │  └─ UnsupportedCallException.php
   │  │        │  │  ├─ RegexGenerator.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ TransformationExtension.php
   │  │        │  │  ├─ SimpleArgumentTransformation.php
   │  │        │  │  ├─ Transformation
   │  │        │  │  │  ├─ ColumnBasedTableTransformation.php
   │  │        │  │  │  ├─ PatternTransformation.php
   │  │        │  │  │  ├─ ReturnTypeTransformation.php
   │  │        │  │  │  ├─ RowBasedTableTransformation.php
   │  │        │  │  │  ├─ TableColumnTransformation.php
   │  │        │  │  │  ├─ TableRowTransformation.php
   │  │        │  │  │  ├─ TokenNameAndReturnTypeTransformation.php
   │  │        │  │  │  └─ TokenNameTransformation.php
   │  │        │  │  ├─ Transformation.php
   │  │        │  │  ├─ TransformationRepository.php
   │  │        │  │  └─ Transformer
   │  │        │  │     ├─ ArgumentTransformer.php
   │  │        │  │     └─ RepositoryArgumentTransformer.php
   │  │        │  └─ Translator
   │  │        │     ├─ Cli
   │  │        │     │  └─ GherkinTranslationsController.php
   │  │        │     └─ ServiceContainer
   │  │        │        └─ GherkinTranslationsExtension.php
   │  │        ├─ Config
   │  │        │  ├─ Config.php
   │  │        │  ├─ ConfigConverterInterface.php
   │  │        │  ├─ ConfigInterface.php
   │  │        │  ├─ Converter
   │  │        │  │  ├─ ConfigConverterTools.php
   │  │        │  │  ├─ CustomPrettyPrinter.php
   │  │        │  │  └─ UsedClassesCollector.php
   │  │        │  ├─ Extension.php
   │  │        │  ├─ ExtensionConfigInterface.php
   │  │        │  ├─ Filter
   │  │        │  │  ├─ Filter.php
   │  │        │  │  ├─ FilterInterface.php
   │  │        │  │  ├─ NameFilter.php
   │  │        │  │  ├─ NarrativeFilter.php
   │  │        │  │  ├─ RoleFilter.php
   │  │        │  │  └─ TagFilter.php
   │  │        │  ├─ Formatter
   │  │        │  │  ├─ Formatter.php
   │  │        │  │  ├─ FormatterConfigInterface.php
   │  │        │  │  ├─ JUnitFormatter.php
   │  │        │  │  ├─ PrettyFormatter.php
   │  │        │  │  ├─ ProgressFormatter.php
   │  │        │  │  └─ ShowOutputOption.php
   │  │        │  ├─ Profile.php
   │  │        │  ├─ Suite.php
   │  │        │  └─ TesterOptions.php
   │  │        ├─ Hook
   │  │        │  ├─ AfterFeature.php
   │  │        │  ├─ AfterScenario.php
   │  │        │  ├─ AfterStep.php
   │  │        │  ├─ AfterSuite.php
   │  │        │  ├─ BeforeFeature.php
   │  │        │  ├─ BeforeScenario.php
   │  │        │  ├─ BeforeStep.php
   │  │        │  ├─ BeforeSuite.php
   │  │        │  └─ Hook.php
   │  │        ├─ Step
   │  │        │  ├─ Definition.php
   │  │        │  ├─ Given.php
   │  │        │  ├─ Then.php
   │  │        │  └─ When.php
   │  │        ├─ Testwork
   │  │        │  ├─ ApplicationFactory.php
   │  │        │  ├─ Argument
   │  │        │  │  ├─ ArgumentOrganiser.php
   │  │        │  │  ├─ ConstructorArgumentOrganiser.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ ArgumentException.php
   │  │        │  │  │  ├─ UnknownParameterValueException.php
   │  │        │  │  │  └─ UnsupportedFunctionException.php
   │  │        │  │  ├─ MixedArgumentOrganiser.php
   │  │        │  │  ├─ PregMatchArgumentOrganiser.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ ArgumentExtension.php
   │  │        │  │  └─ Validator.php
   │  │        │  ├─ Autoloader
   │  │        │  │  ├─ Cli
   │  │        │  │  │  └─ AutoloaderController.php
   │  │        │  │  └─ ServiceContainer
   │  │        │  │     └─ AutoloaderExtension.php
   │  │        │  ├─ Call
   │  │        │  │  ├─ Call.php
   │  │        │  │  ├─ CallCenter.php
   │  │        │  │  ├─ CallResult.php
   │  │        │  │  ├─ CallResults.php
   │  │        │  │  ├─ Callee.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ BadCallbackException.php
   │  │        │  │  │  ├─ CallErrorException.php
   │  │        │  │  │  ├─ CallException.php
   │  │        │  │  │  ├─ CallHandlingException.php
   │  │        │  │  │  └─ FatalThrowableError.php
   │  │        │  │  ├─ Filter
   │  │        │  │  │  ├─ CallFilter.php
   │  │        │  │  │  └─ ResultFilter.php
   │  │        │  │  ├─ Handler
   │  │        │  │  │  ├─ CallHandler.php
   │  │        │  │  │  ├─ Exception
   │  │        │  │  │  │  ├─ ClassNotFoundHandler.php
   │  │        │  │  │  │  └─ MethodNotFoundHandler.php
   │  │        │  │  │  ├─ ExceptionHandler.php
   │  │        │  │  │  └─ RuntimeCallHandler.php
   │  │        │  │  ├─ RuntimeCallee.php
   │  │        │  │  └─ ServiceContainer
   │  │        │  │     └─ CallExtension.php
   │  │        │  ├─ Cli
   │  │        │  │  ├─ Application.php
   │  │        │  │  ├─ Command.php
   │  │        │  │  ├─ Controller.php
   │  │        │  │  ├─ ConvertConfigCommand.php
   │  │        │  │  ├─ DebugCommand.php
   │  │        │  │  ├─ DumpReferenceCommand.php
   │  │        │  │  └─ ServiceContainer
   │  │        │  │     └─ CliExtension.php
   │  │        │  ├─ Counter
   │  │        │  │  ├─ Exception
   │  │        │  │  │  └─ TimerException.php
   │  │        │  │  ├─ Memory.php
   │  │        │  │  └─ Timer.php
   │  │        │  ├─ Environment
   │  │        │  │  ├─ Call
   │  │        │  │  │  └─ EnvironmentCall.php
   │  │        │  │  ├─ Environment.php
   │  │        │  │  ├─ EnvironmentManager.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ EnvironmentBuildException.php
   │  │        │  │  │  ├─ EnvironmentException.php
   │  │        │  │  │  ├─ EnvironmentIsolationException.php
   │  │        │  │  │  └─ EnvironmentReadException.php
   │  │        │  │  ├─ Handler
   │  │        │  │  │  ├─ EnvironmentHandler.php
   │  │        │  │  │  └─ StaticEnvironmentHandler.php
   │  │        │  │  ├─ Reader
   │  │        │  │  │  └─ EnvironmentReader.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ EnvironmentExtension.php
   │  │        │  │  └─ StaticEnvironment.php
   │  │        │  ├─ Event
   │  │        │  │  └─ Event.php
   │  │        │  ├─ EventDispatcher
   │  │        │  │  ├─ Cli
   │  │        │  │  │  └─ SigintController.php
   │  │        │  │  ├─ Event
   │  │        │  │  │  ├─ AfterExerciseAborted.php
   │  │        │  │  │  ├─ AfterExerciseCompleted.php
   │  │        │  │  │  ├─ AfterExerciseSetup.php
   │  │        │  │  │  ├─ AfterSetup.php
   │  │        │  │  │  ├─ AfterSuiteAborted.php
   │  │        │  │  │  ├─ AfterSuiteSetup.php
   │  │        │  │  │  ├─ AfterSuiteTested.php
   │  │        │  │  │  ├─ AfterTested.php
   │  │        │  │  │  ├─ BeforeExerciseCompleted.php
   │  │        │  │  │  ├─ BeforeExerciseTeardown.php
   │  │        │  │  │  ├─ BeforeSuiteTeardown.php
   │  │        │  │  │  ├─ BeforeSuiteTested.php
   │  │        │  │  │  ├─ BeforeTeardown.php
   │  │        │  │  │  ├─ BeforeTested.php
   │  │        │  │  │  ├─ ExerciseCompleted.php
   │  │        │  │  │  ├─ LifecycleEvent.php
   │  │        │  │  │  └─ SuiteTested.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ EventDispatcherExtension.php
   │  │        │  │  ├─ Tester
   │  │        │  │  │  ├─ EventDispatchingExercise.php
   │  │        │  │  │  └─ EventDispatchingSuiteTester.php
   │  │        │  │  └─ TestworkEventDispatcher.php
   │  │        │  ├─ Exception
   │  │        │  │  ├─ Cli
   │  │        │  │  │  └─ VerbosityController.php
   │  │        │  │  ├─ ExceptionPresenter.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ ExceptionExtension.php
   │  │        │  │  ├─ Stringer
   │  │        │  │  │  ├─ ExceptionStringer.php
   │  │        │  │  │  ├─ PHPUnitExceptionStringer.php
   │  │        │  │  │  └─ TestworkExceptionStringer.php
   │  │        │  │  └─ TestworkException.php
   │  │        │  ├─ Filesystem
   │  │        │  │  ├─ ConsoleFilesystemLogger.php
   │  │        │  │  ├─ FilesystemLogger.php
   │  │        │  │  └─ ServiceContainer
   │  │        │  │     └─ FilesystemExtension.php
   │  │        │  ├─ Hook
   │  │        │  │  ├─ Call
   │  │        │  │  │  ├─ AfterSuite.php
   │  │        │  │  │  ├─ BeforeSuite.php
   │  │        │  │  │  ├─ HookCall.php
   │  │        │  │  │  ├─ RuntimeFilterableHook.php
   │  │        │  │  │  ├─ RuntimeHook.php
   │  │        │  │  │  └─ RuntimeSuiteHook.php
   │  │        │  │  ├─ FilterableHook.php
   │  │        │  │  ├─ Hook.php
   │  │        │  │  ├─ HookDispatcher.php
   │  │        │  │  ├─ HookRepository.php
   │  │        │  │  ├─ Scope
   │  │        │  │  │  ├─ AfterSuiteScope.php
   │  │        │  │  │  ├─ AfterTestScope.php
   │  │        │  │  │  ├─ BeforeSuiteScope.php
   │  │        │  │  │  ├─ HookScope.php
   │  │        │  │  │  └─ SuiteScope.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ HookExtension.php
   │  │        │  │  └─ Tester
   │  │        │  │     ├─ HookableSuiteTester.php
   │  │        │  │     └─ Setup
   │  │        │  │        ├─ HookedSetup.php
   │  │        │  │        └─ HookedTeardown.php
   │  │        │  ├─ Ordering
   │  │        │  │  ├─ Cli
   │  │        │  │  │  └─ OrderController.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  └─ InvalidOrderException.php
   │  │        │  │  ├─ OrderedExercise.php
   │  │        │  │  ├─ Orderer
   │  │        │  │  │  ├─ NoopOrderer.php
   │  │        │  │  │  ├─ Orderer.php
   │  │        │  │  │  ├─ RandomOrderer.php
   │  │        │  │  │  └─ ReverseOrderer.php
   │  │        │  │  └─ ServiceContainer
   │  │        │  │     └─ OrderingExtension.php
   │  │        │  ├─ Output
   │  │        │  │  ├─ Cli
   │  │        │  │  │  └─ OutputController.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ BadOutputPathException.php
   │  │        │  │  │  ├─ FormatterNotFoundException.php
   │  │        │  │  │  ├─ MissingExtensionException.php
   │  │        │  │  │  ├─ MissingOutputPathException.php
   │  │        │  │  │  ├─ OutputException.php
   │  │        │  │  │  └─ PrinterException.php
   │  │        │  │  ├─ Formatter.php
   │  │        │  │  ├─ Node
   │  │        │  │  │  └─ EventListener
   │  │        │  │  │     ├─ ChainEventListener.php
   │  │        │  │  │     ├─ EventListener.php
   │  │        │  │  │     └─ Flow
   │  │        │  │  │        └─ FireOnlyIfFormatterParameterListener.php
   │  │        │  │  ├─ NodeEventListeningFormatter.php
   │  │        │  │  ├─ OutputManager.php
   │  │        │  │  ├─ Printer
   │  │        │  │  │  ├─ Factory
   │  │        │  │  │  │  ├─ ConsoleOutputFactory.php
   │  │        │  │  │  │  ├─ FilesystemOutputFactory.php
   │  │        │  │  │  │  └─ OutputFactory.php
   │  │        │  │  │  ├─ JUnitOutputPrinter.php
   │  │        │  │  │  ├─ OutputPrinter.php
   │  │        │  │  │  └─ StreamOutputPrinter.php
   │  │        │  │  └─ ServiceContainer
   │  │        │  │     ├─ Formatter
   │  │        │  │     │  └─ FormatterFactory.php
   │  │        │  │     └─ OutputExtension.php
   │  │        │  ├─ PathOptions
   │  │        │  │  ├─ Cli
   │  │        │  │  │  └─ PathOptionsController.php
   │  │        │  │  ├─ Printer
   │  │        │  │  │  └─ ConfigurablePathPrinter.php
   │  │        │  │  └─ ServiceContainer
   │  │        │  │     └─ PathOptionsExtension.php
   │  │        │  ├─ ServiceContainer
   │  │        │  │  ├─ Configuration
   │  │        │  │  │  ├─ ConfigurationLoader.php
   │  │        │  │  │  └─ ConfigurationTree.php
   │  │        │  │  ├─ ContainerLoader.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ ConfigurationLoadingException.php
   │  │        │  │  │  ├─ ExtensionException.php
   │  │        │  │  │  ├─ ExtensionInitializationException.php
   │  │        │  │  │  ├─ ProcessingException.php
   │  │        │  │  │  └─ ServiceContainerException.php
   │  │        │  │  ├─ Extension.php
   │  │        │  │  ├─ ExtensionManager.php
   │  │        │  │  └─ ServiceProcessor.php
   │  │        │  ├─ Specification
   │  │        │  │  ├─ GroupedSpecificationIterator.php
   │  │        │  │  ├─ Locator
   │  │        │  │  │  └─ SpecificationLocator.php
   │  │        │  │  ├─ NoSpecificationsIterator.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ SpecificationExtension.php
   │  │        │  │  ├─ SpecificationArrayIterator.php
   │  │        │  │  ├─ SpecificationFinder.php
   │  │        │  │  └─ SpecificationIterator.php
   │  │        │  ├─ Suite
   │  │        │  │  ├─ Cli
   │  │        │  │  │  ├─ InitializationController.php
   │  │        │  │  │  └─ SuiteController.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ ParameterNotFoundException.php
   │  │        │  │  │  ├─ SuiteConfigurationException.php
   │  │        │  │  │  ├─ SuiteException.php
   │  │        │  │  │  ├─ SuiteGenerationException.php
   │  │        │  │  │  ├─ SuiteNotFoundException.php
   │  │        │  │  │  └─ SuiteSetupException.php
   │  │        │  │  ├─ Generator
   │  │        │  │  │  ├─ GenericSuiteGenerator.php
   │  │        │  │  │  └─ SuiteGenerator.php
   │  │        │  │  ├─ GenericSuite.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ SuiteExtension.php
   │  │        │  │  ├─ Setup
   │  │        │  │  │  └─ SuiteSetup.php
   │  │        │  │  ├─ Suite.php
   │  │        │  │  ├─ SuiteBootstrapper.php
   │  │        │  │  ├─ SuiteRegistry.php
   │  │        │  │  └─ SuiteRepository.php
   │  │        │  ├─ Tester
   │  │        │  │  ├─ Cli
   │  │        │  │  │  ├─ ExerciseController.php
   │  │        │  │  │  └─ StrictController.php
   │  │        │  │  ├─ Exception
   │  │        │  │  │  ├─ TesterException.php
   │  │        │  │  │  └─ WrongPathsException.php
   │  │        │  │  ├─ Exercise.php
   │  │        │  │  ├─ Handler
   │  │        │  │  │  └─ StopOnFailureHandler.php
   │  │        │  │  ├─ Result
   │  │        │  │  │  ├─ ExceptionResult.php
   │  │        │  │  │  ├─ IntegerTestResult.php
   │  │        │  │  │  ├─ Interpretation
   │  │        │  │  │  │  ├─ ResultInterpretation.php
   │  │        │  │  │  │  ├─ SoftInterpretation.php
   │  │        │  │  │  │  └─ StrictInterpretation.php
   │  │        │  │  │  ├─ ResultInterpreter.php
   │  │        │  │  │  ├─ TestResult.php
   │  │        │  │  │  ├─ TestResults.php
   │  │        │  │  │  └─ TestWithSetupResult.php
   │  │        │  │  ├─ Runtime
   │  │        │  │  │  ├─ RuntimeExercise.php
   │  │        │  │  │  └─ RuntimeSuiteTester.php
   │  │        │  │  ├─ ServiceContainer
   │  │        │  │  │  └─ TesterExtension.php
   │  │        │  │  ├─ Setup
   │  │        │  │  │  ├─ FailedSetup.php
   │  │        │  │  │  ├─ FailedTeardown.php
   │  │        │  │  │  ├─ Setup.php
   │  │        │  │  │  ├─ SuccessfulSetup.php
   │  │        │  │  │  ├─ SuccessfulTeardown.php
   │  │        │  │  │  └─ Teardown.php
   │  │        │  │  ├─ SpecificationTester.php
   │  │        │  │  └─ SuiteTester.php
   │  │        │  └─ Translator
   │  │        │     ├─ Cli
   │  │        │     │  └─ LanguageController.php
   │  │        │     └─ ServiceContainer
   │  │        │        └─ TranslatorExtension.php
   │  │        └─ Transformation
   │  │           └─ Transform.php
   │  └─ gherkin
   │     ├─ CHANGELOG.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     ├─ i18n.php
   │     └─ src
   │        ├─ Cache
   │        │  ├─ CacheInterface.php
   │        │  ├─ FileCache.php
   │        │  └─ MemoryCache.php
   │        ├─ Exception
   │        │  ├─ CacheException.php
   │        │  ├─ Exception.php
   │        │  ├─ LexerException.php
   │        │  ├─ NodeException.php
   │        │  ├─ ParserException.php
   │        │  ├─ UnexpectedParserNodeException.php
   │        │  └─ UnexpectedTaggedNodeException.php
   │        ├─ Filter
   │        │  ├─ ComplexFilter.php
   │        │  ├─ ComplexFilterInterface.php
   │        │  ├─ FeatureFilterInterface.php
   │        │  ├─ FilterInterface.php
   │        │  ├─ LineFilter.php
   │        │  ├─ LineRangeFilter.php
   │        │  ├─ NameFilter.php
   │        │  ├─ NarrativeFilter.php
   │        │  ├─ PathsFilter.php
   │        │  ├─ RoleFilter.php
   │        │  ├─ SimpleFilter.php
   │        │  └─ TagFilter.php
   │        ├─ Gherkin.php
   │        ├─ Keywords
   │        │  ├─ ArrayKeywords.php
   │        │  ├─ CachedArrayKeywords.php
   │        │  ├─ CucumberKeywords.php
   │        │  ├─ KeywordsDumper.php
   │        │  └─ KeywordsInterface.php
   │        ├─ Lexer.php
   │        ├─ Loader
   │        │  ├─ AbstractFileLoader.php
   │        │  ├─ ArrayLoader.php
   │        │  ├─ CucumberNDJsonAstLoader.php
   │        │  ├─ DirectoryLoader.php
   │        │  ├─ FileLoaderInterface.php
   │        │  ├─ GherkinFileLoader.php
   │        │  ├─ LoaderInterface.php
   │        │  └─ YamlFileLoader.php
   │        ├─ Node
   │        │  ├─ ArgumentInterface.php
   │        │  ├─ BackgroundNode.php
   │        │  ├─ ExampleNode.php
   │        │  ├─ ExampleTableNode.php
   │        │  ├─ FeatureNode.php
   │        │  ├─ KeywordNodeInterface.php
   │        │  ├─ NamedScenarioInterface.php
   │        │  ├─ NodeInterface.php
   │        │  ├─ OutlineNode.php
   │        │  ├─ PyStringNode.php
   │        │  ├─ ScenarioInterface.php
   │        │  ├─ ScenarioLikeInterface.php
   │        │  ├─ ScenarioNode.php
   │        │  ├─ StepContainerInterface.php
   │        │  ├─ StepNode.php
   │        │  ├─ TableNode.php
   │        │  ├─ TaggedNodeInterface.php
   │        │  └─ TaggedNodeTrait.php
   │        └─ Parser.php
   ├─ bin
   │  ├─ .phpunit.result.cache
   │  ├─ behat
   │  ├─ behat.bat
   │  ├─ php-parse
   │  ├─ php-parse.bat
   │  ├─ phpunit
   │  ├─ phpunit.bat
   │  ├─ yaml-lint
   │  └─ yaml-lint.bat
   ├─ composer
   │  ├─ ClassLoader.php
   │  ├─ InstalledVersions.php
   │  ├─ LICENSE
   │  ├─ autoload_classmap.php
   │  ├─ autoload_files.php
   │  ├─ autoload_namespaces.php
   │  ├─ autoload_psr4.php
   │  ├─ autoload_real.php
   │  ├─ autoload_static.php
   │  ├─ installed.json
   │  ├─ installed.php
   │  ├─ pcre
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  ├─ extension.neon
   │  │  └─ src
   │  │     ├─ MatchAllResult.php
   │  │     ├─ MatchAllStrictGroupsResult.php
   │  │     ├─ MatchAllWithOffsetsResult.php
   │  │     ├─ MatchResult.php
   │  │     ├─ MatchStrictGroupsResult.php
   │  │     ├─ MatchWithOffsetsResult.php
   │  │     ├─ PHPStan
   │  │     │  ├─ InvalidRegexPatternRule.php
   │  │     │  ├─ PregMatchFlags.php
   │  │     │  ├─ PregMatchParameterOutTypeExtension.php
   │  │     │  ├─ PregMatchTypeSpecifyingExtension.php
   │  │     │  ├─ PregReplaceCallbackClosureTypeExtension.php
   │  │     │  └─ UnsafeStrictGroupsCallRule.php
   │  │     ├─ PcreException.php
   │  │     ├─ Preg.php
   │  │     ├─ Regex.php
   │  │     ├─ ReplaceResult.php
   │  │     └─ UnexpectedNullMatchException.php
   │  ├─ platform_check.php
   │  └─ xdebug-handler
   │     ├─ CHANGELOG.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        ├─ PhpConfig.php
   │        ├─ Process.php
   │        ├─ Status.php
   │        └─ XdebugHandler.php
   ├─ myclabs
   │  └─ deep-copy
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        └─ DeepCopy
   │           ├─ DeepCopy.php
   │           ├─ Exception
   │           │  ├─ CloneException.php
   │           │  └─ PropertyException.php
   │           ├─ Filter
   │           │  ├─ ChainableFilter.php
   │           │  ├─ Doctrine
   │           │  │  ├─ DoctrineCollectionFilter.php
   │           │  │  ├─ DoctrineEmptyCollectionFilter.php
   │           │  │  └─ DoctrineProxyFilter.php
   │           │  ├─ Filter.php
   │           │  ├─ KeepFilter.php
   │           │  ├─ ReplaceFilter.php
   │           │  └─ SetNullFilter.php
   │           ├─ Matcher
   │           │  ├─ Doctrine
   │           │  │  └─ DoctrineProxyMatcher.php
   │           │  ├─ Matcher.php
   │           │  ├─ PropertyMatcher.php
   │           │  ├─ PropertyNameMatcher.php
   │           │  └─ PropertyTypeMatcher.php
   │           ├─ Reflection
   │           │  └─ ReflectionHelper.php
   │           ├─ TypeFilter
   │           │  ├─ Date
   │           │  │  ├─ DateIntervalFilter.php
   │           │  │  └─ DatePeriodFilter.php
   │           │  ├─ ReplaceFilter.php
   │           │  ├─ ShallowCopyFilter.php
   │           │  ├─ Spl
   │           │  │  ├─ ArrayObjectFilter.php
   │           │  │  ├─ SplDoublyLinkedList.php
   │           │  │  └─ SplDoublyLinkedListFilter.php
   │           │  └─ TypeFilter.php
   │           ├─ TypeMatcher
   │           │  └─ TypeMatcher.php
   │           └─ deep_copy.php
   ├─ nikic
   │  └─ php-parser
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ bin
   │     │  └─ php-parse
   │     ├─ composer.json
   │     └─ lib
   │        └─ PhpParser
   │           ├─ Builder
   │           │  ├─ ClassConst.php
   │           │  ├─ Class_.php
   │           │  ├─ Declaration.php
   │           │  ├─ EnumCase.php
   │           │  ├─ Enum_.php
   │           │  ├─ FunctionLike.php
   │           │  ├─ Function_.php
   │           │  ├─ Interface_.php
   │           │  ├─ Method.php
   │           │  ├─ Namespace_.php
   │           │  ├─ Param.php
   │           │  ├─ Property.php
   │           │  ├─ TraitUse.php
   │           │  ├─ TraitUseAdaptation.php
   │           │  ├─ Trait_.php
   │           │  └─ Use_.php
   │           ├─ Builder.php
   │           ├─ BuilderFactory.php
   │           ├─ BuilderHelpers.php
   │           ├─ Comment
   │           │  └─ Doc.php
   │           ├─ Comment.php
   │           ├─ ConstExprEvaluationException.php
   │           ├─ ConstExprEvaluator.php
   │           ├─ Error.php
   │           ├─ ErrorHandler
   │           │  ├─ Collecting.php
   │           │  └─ Throwing.php
   │           ├─ ErrorHandler.php
   │           ├─ Internal
   │           │  ├─ DiffElem.php
   │           │  ├─ Differ.php
   │           │  ├─ PrintableNewAnonClassNode.php
   │           │  ├─ TokenPolyfill.php
   │           │  └─ TokenStream.php
   │           ├─ JsonDecoder.php
   │           ├─ Lexer
   │           │  ├─ Emulative.php
   │           │  └─ TokenEmulator
   │           │     ├─ AsymmetricVisibilityTokenEmulator.php
   │           │     ├─ AttributeEmulator.php
   │           │     ├─ EnumTokenEmulator.php
   │           │     ├─ ExplicitOctalEmulator.php
   │           │     ├─ KeywordEmulator.php
   │           │     ├─ MatchTokenEmulator.php
   │           │     ├─ NullsafeTokenEmulator.php
   │           │     ├─ PipeOperatorEmulator.php
   │           │     ├─ PropertyTokenEmulator.php
   │           │     ├─ ReadonlyFunctionTokenEmulator.php
   │           │     ├─ ReadonlyTokenEmulator.php
   │           │     ├─ ReverseEmulator.php
   │           │     ├─ TokenEmulator.php
   │           │     └─ VoidCastEmulator.php
   │           ├─ Lexer.php
   │           ├─ Modifiers.php
   │           ├─ NameContext.php
   │           ├─ Node
   │           │  ├─ Arg.php
   │           │  ├─ ArrayItem.php
   │           │  ├─ Attribute.php
   │           │  ├─ AttributeGroup.php
   │           │  ├─ ClosureUse.php
   │           │  ├─ ComplexType.php
   │           │  ├─ Const_.php
   │           │  ├─ DeclareItem.php
   │           │  ├─ Expr
   │           │  │  ├─ ArrayDimFetch.php
   │           │  │  ├─ ArrayItem.php
   │           │  │  ├─ Array_.php
   │           │  │  ├─ ArrowFunction.php
   │           │  │  ├─ Assign.php
   │           │  │  ├─ AssignOp
   │           │  │  │  ├─ BitwiseAnd.php
   │           │  │  │  ├─ BitwiseOr.php
   │           │  │  │  ├─ BitwiseXor.php
   │           │  │  │  ├─ Coalesce.php
   │           │  │  │  ├─ Concat.php
   │           │  │  │  ├─ Div.php
   │           │  │  │  ├─ Minus.php
   │           │  │  │  ├─ Mod.php
   │           │  │  │  ├─ Mul.php
   │           │  │  │  ├─ Plus.php
   │           │  │  │  ├─ Pow.php
   │           │  │  │  ├─ ShiftLeft.php
   │           │  │  │  └─ ShiftRight.php
   │           │  │  ├─ AssignOp.php
   │           │  │  ├─ AssignRef.php
   │           │  │  ├─ BinaryOp
   │           │  │  │  ├─ BitwiseAnd.php
   │           │  │  │  ├─ BitwiseOr.php
   │           │  │  │  ├─ BitwiseXor.php
   │           │  │  │  ├─ BooleanAnd.php
   │           │  │  │  ├─ BooleanOr.php
   │           │  │  │  ├─ Coalesce.php
   │           │  │  │  ├─ Concat.php
   │           │  │  │  ├─ Div.php
   │           │  │  │  ├─ Equal.php
   │           │  │  │  ├─ Greater.php
   │           │  │  │  ├─ GreaterOrEqual.php
   │           │  │  │  ├─ Identical.php
   │           │  │  │  ├─ LogicalAnd.php
   │           │  │  │  ├─ LogicalOr.php
   │           │  │  │  ├─ LogicalXor.php
   │           │  │  │  ├─ Minus.php
   │           │  │  │  ├─ Mod.php
   │           │  │  │  ├─ Mul.php
   │           │  │  │  ├─ NotEqual.php
   │           │  │  │  ├─ NotIdentical.php
   │           │  │  │  ├─ Pipe.php
   │           │  │  │  ├─ Plus.php
   │           │  │  │  ├─ Pow.php
   │           │  │  │  ├─ ShiftLeft.php
   │           │  │  │  ├─ ShiftRight.php
   │           │  │  │  ├─ Smaller.php
   │           │  │  │  ├─ SmallerOrEqual.php
   │           │  │  │  └─ Spaceship.php
   │           │  │  ├─ BinaryOp.php
   │           │  │  ├─ BitwiseNot.php
   │           │  │  ├─ BooleanNot.php
   │           │  │  ├─ CallLike.php
   │           │  │  ├─ Cast
   │           │  │  │  ├─ Array_.php
   │           │  │  │  ├─ Bool_.php
   │           │  │  │  ├─ Double.php
   │           │  │  │  ├─ Int_.php
   │           │  │  │  ├─ Object_.php
   │           │  │  │  ├─ String_.php
   │           │  │  │  ├─ Unset_.php
   │           │  │  │  └─ Void_.php
   │           │  │  ├─ Cast.php
   │           │  │  ├─ ClassConstFetch.php
   │           │  │  ├─ Clone_.php
   │           │  │  ├─ Closure.php
   │           │  │  ├─ ClosureUse.php
   │           │  │  ├─ ConstFetch.php
   │           │  │  ├─ Empty_.php
   │           │  │  ├─ Error.php
   │           │  │  ├─ ErrorSuppress.php
   │           │  │  ├─ Eval_.php
   │           │  │  ├─ Exit_.php
   │           │  │  ├─ FuncCall.php
   │           │  │  ├─ Include_.php
   │           │  │  ├─ Instanceof_.php
   │           │  │  ├─ Isset_.php
   │           │  │  ├─ List_.php
   │           │  │  ├─ Match_.php
   │           │  │  ├─ MethodCall.php
   │           │  │  ├─ New_.php
   │           │  │  ├─ NullsafeMethodCall.php
   │           │  │  ├─ NullsafePropertyFetch.php
   │           │  │  ├─ PostDec.php
   │           │  │  ├─ PostInc.php
   │           │  │  ├─ PreDec.php
   │           │  │  ├─ PreInc.php
   │           │  │  ├─ Print_.php
   │           │  │  ├─ PropertyFetch.php
   │           │  │  ├─ ShellExec.php
   │           │  │  ├─ StaticCall.php
   │           │  │  ├─ StaticPropertyFetch.php
   │           │  │  ├─ Ternary.php
   │           │  │  ├─ Throw_.php
   │           │  │  ├─ UnaryMinus.php
   │           │  │  ├─ UnaryPlus.php
   │           │  │  ├─ Variable.php
   │           │  │  ├─ YieldFrom.php
   │           │  │  └─ Yield_.php
   │           │  ├─ Expr.php
   │           │  ├─ FunctionLike.php
   │           │  ├─ Identifier.php
   │           │  ├─ InterpolatedStringPart.php
   │           │  ├─ IntersectionType.php
   │           │  ├─ MatchArm.php
   │           │  ├─ Name
   │           │  │  ├─ FullyQualified.php
   │           │  │  └─ Relative.php
   │           │  ├─ Name.php
   │           │  ├─ NullableType.php
   │           │  ├─ Param.php
   │           │  ├─ PropertyHook.php
   │           │  ├─ PropertyItem.php
   │           │  ├─ Scalar
   │           │  │  ├─ DNumber.php
   │           │  │  ├─ Encapsed.php
   │           │  │  ├─ EncapsedStringPart.php
   │           │  │  ├─ Float_.php
   │           │  │  ├─ Int_.php
   │           │  │  ├─ InterpolatedString.php
   │           │  │  ├─ LNumber.php
   │           │  │  ├─ MagicConst
   │           │  │  │  ├─ Class_.php
   │           │  │  │  ├─ Dir.php
   │           │  │  │  ├─ File.php
   │           │  │  │  ├─ Function_.php
   │           │  │  │  ├─ Line.php
   │           │  │  │  ├─ Method.php
   │           │  │  │  ├─ Namespace_.php
   │           │  │  │  ├─ Property.php
   │           │  │  │  └─ Trait_.php
   │           │  │  ├─ MagicConst.php
   │           │  │  └─ String_.php
   │           │  ├─ Scalar.php
   │           │  ├─ StaticVar.php
   │           │  ├─ Stmt
   │           │  │  ├─ Block.php
   │           │  │  ├─ Break_.php
   │           │  │  ├─ Case_.php
   │           │  │  ├─ Catch_.php
   │           │  │  ├─ ClassConst.php
   │           │  │  ├─ ClassLike.php
   │           │  │  ├─ ClassMethod.php
   │           │  │  ├─ Class_.php
   │           │  │  ├─ Const_.php
   │           │  │  ├─ Continue_.php
   │           │  │  ├─ DeclareDeclare.php
   │           │  │  ├─ Declare_.php
   │           │  │  ├─ Do_.php
   │           │  │  ├─ Echo_.php
   │           │  │  ├─ ElseIf_.php
   │           │  │  ├─ Else_.php
   │           │  │  ├─ EnumCase.php
   │           │  │  ├─ Enum_.php
   │           │  │  ├─ Expression.php
   │           │  │  ├─ Finally_.php
   │           │  │  ├─ For_.php
   │           │  │  ├─ Foreach_.php
   │           │  │  ├─ Function_.php
   │           │  │  ├─ Global_.php
   │           │  │  ├─ Goto_.php
   │           │  │  ├─ GroupUse.php
   │           │  │  ├─ HaltCompiler.php
   │           │  │  ├─ If_.php
   │           │  │  ├─ InlineHTML.php
   │           │  │  ├─ Interface_.php
   │           │  │  ├─ Label.php
   │           │  │  ├─ Namespace_.php
   │           │  │  ├─ Nop.php
   │           │  │  ├─ Property.php
   │           │  │  ├─ PropertyProperty.php
   │           │  │  ├─ Return_.php
   │           │  │  ├─ StaticVar.php
   │           │  │  ├─ Static_.php
   │           │  │  ├─ Switch_.php
   │           │  │  ├─ TraitUse.php
   │           │  │  ├─ TraitUseAdaptation
   │           │  │  │  ├─ Alias.php
   │           │  │  │  └─ Precedence.php
   │           │  │  ├─ TraitUseAdaptation.php
   │           │  │  ├─ Trait_.php
   │           │  │  ├─ TryCatch.php
   │           │  │  ├─ Unset_.php
   │           │  │  ├─ UseUse.php
   │           │  │  ├─ Use_.php
   │           │  │  └─ While_.php
   │           │  ├─ Stmt.php
   │           │  ├─ UnionType.php
   │           │  ├─ UseItem.php
   │           │  ├─ VarLikeIdentifier.php
   │           │  └─ VariadicPlaceholder.php
   │           ├─ Node.php
   │           ├─ NodeAbstract.php
   │           ├─ NodeDumper.php
   │           ├─ NodeFinder.php
   │           ├─ NodeTraverser.php
   │           ├─ NodeTraverserInterface.php
   │           ├─ NodeVisitor
   │           │  ├─ CloningVisitor.php
   │           │  ├─ CommentAnnotatingVisitor.php
   │           │  ├─ FindingVisitor.php
   │           │  ├─ FirstFindingVisitor.php
   │           │  ├─ NameResolver.php
   │           │  ├─ NodeConnectingVisitor.php
   │           │  └─ ParentConnectingVisitor.php
   │           ├─ NodeVisitor.php
   │           ├─ NodeVisitorAbstract.php
   │           ├─ Parser
   │           │  ├─ Php7.php
   │           │  └─ Php8.php
   │           ├─ Parser.php
   │           ├─ ParserAbstract.php
   │           ├─ ParserFactory.php
   │           ├─ PhpVersion.php
   │           ├─ PrettyPrinter
   │           │  └─ Standard.php
   │           ├─ PrettyPrinter.php
   │           ├─ PrettyPrinterAbstract.php
   │           ├─ Token.php
   │           └─ compatibility_tokens.php
   ├─ phar-io
   │  ├─ manifest
   │  │  ├─ .php-cs-fixer.dist.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  ├─ manifest.xsd
   │  │  ├─ src
   │  │  │  ├─ ManifestDocumentMapper.php
   │  │  │  ├─ ManifestLoader.php
   │  │  │  ├─ ManifestSerializer.php
   │  │  │  ├─ exceptions
   │  │  │  │  ├─ ElementCollectionException.php
   │  │  │  │  ├─ Exception.php
   │  │  │  │  ├─ InvalidApplicationNameException.php
   │  │  │  │  ├─ InvalidEmailException.php
   │  │  │  │  ├─ InvalidUrlException.php
   │  │  │  │  ├─ ManifestDocumentException.php
   │  │  │  │  ├─ ManifestDocumentLoadingException.php
   │  │  │  │  ├─ ManifestDocumentMapperException.php
   │  │  │  │  ├─ ManifestElementException.php
   │  │  │  │  ├─ ManifestLoaderException.php
   │  │  │  │  └─ NoEmailAddressException.php
   │  │  │  ├─ values
   │  │  │  │  ├─ Application.php
   │  │  │  │  ├─ ApplicationName.php
   │  │  │  │  ├─ Author.php
   │  │  │  │  ├─ AuthorCollection.php
   │  │  │  │  ├─ AuthorCollectionIterator.php
   │  │  │  │  ├─ BundledComponent.php
   │  │  │  │  ├─ BundledComponentCollection.php
   │  │  │  │  ├─ BundledComponentCollectionIterator.php
   │  │  │  │  ├─ CopyrightInformation.php
   │  │  │  │  ├─ Email.php
   │  │  │  │  ├─ Extension.php
   │  │  │  │  ├─ Library.php
   │  │  │  │  ├─ License.php
   │  │  │  │  ├─ Manifest.php
   │  │  │  │  ├─ PhpExtensionRequirement.php
   │  │  │  │  ├─ PhpVersionRequirement.php
   │  │  │  │  ├─ Requirement.php
   │  │  │  │  ├─ RequirementCollection.php
   │  │  │  │  ├─ RequirementCollectionIterator.php
   │  │  │  │  ├─ Type.php
   │  │  │  │  └─ Url.php
   │  │  │  └─ xml
   │  │  │     ├─ AuthorElement.php
   │  │  │     ├─ AuthorElementCollection.php
   │  │  │     ├─ BundlesElement.php
   │  │  │     ├─ ComponentElement.php
   │  │  │     ├─ ComponentElementCollection.php
   │  │  │     ├─ ContainsElement.php
   │  │  │     ├─ CopyrightElement.php
   │  │  │     ├─ ElementCollection.php
   │  │  │     ├─ ExtElement.php
   │  │  │     ├─ ExtElementCollection.php
   │  │  │     ├─ ExtensionElement.php
   │  │  │     ├─ LicenseElement.php
   │  │  │     ├─ ManifestDocument.php
   │  │  │     ├─ ManifestElement.php
   │  │  │     ├─ PhpElement.php
   │  │  │     └─ RequiresElement.php
   │  │  └─ tools
   │  │     └─ php-cs-fixer.d
   │  │        ├─ PhpdocSingleLineVarFixer.php
   │  │        └─ header.txt
   │  └─ version
   │     ├─ CHANGELOG.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        ├─ BuildMetaData.php
   │        ├─ PreReleaseSuffix.php
   │        ├─ Version.php
   │        ├─ VersionConstraintParser.php
   │        ├─ VersionConstraintValue.php
   │        ├─ VersionNumber.php
   │        ├─ constraints
   │        │  ├─ AbstractVersionConstraint.php
   │        │  ├─ AndVersionConstraintGroup.php
   │        │  ├─ AnyVersionConstraint.php
   │        │  ├─ ExactVersionConstraint.php
   │        │  ├─ GreaterThanOrEqualToVersionConstraint.php
   │        │  ├─ OrVersionConstraintGroup.php
   │        │  ├─ SpecificMajorAndMinorVersionConstraint.php
   │        │  ├─ SpecificMajorVersionConstraint.php
   │        │  └─ VersionConstraint.php
   │        └─ exceptions
   │           ├─ Exception.php
   │           ├─ InvalidPreReleaseSuffixException.php
   │           ├─ InvalidVersionException.php
   │           ├─ NoBuildMetaDataException.php
   │           ├─ NoPreReleaseSuffixException.php
   │           └─ UnsupportedVersionConstraintException.php
   ├─ phpunit
   │  ├─ php-code-coverage
   │  │  ├─ ChangeLog-10.1.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ CodeCoverage.php
   │  │     ├─ Data
   │  │     │  ├─ ProcessedCodeCoverageData.php
   │  │     │  └─ RawCodeCoverageData.php
   │  │     ├─ Driver
   │  │     │  ├─ Driver.php
   │  │     │  ├─ PcovDriver.php
   │  │     │  ├─ Selector.php
   │  │     │  └─ XdebugDriver.php
   │  │     ├─ Exception
   │  │     │  ├─ BranchAndPathCoverageNotSupportedException.php
   │  │     │  ├─ DeadCodeDetectionNotSupportedException.php
   │  │     │  ├─ DirectoryCouldNotBeCreatedException.php
   │  │     │  ├─ Exception.php
   │  │     │  ├─ FileCouldNotBeWrittenException.php
   │  │     │  ├─ InvalidArgumentException.php
   │  │     │  ├─ NoCodeCoverageDriverAvailableException.php
   │  │     │  ├─ NoCodeCoverageDriverWithPathCoverageSupportAvailableException.php
   │  │     │  ├─ ParserException.php
   │  │     │  ├─ PathExistsButIsNotDirectoryException.php
   │  │     │  ├─ PcovNotAvailableException.php
   │  │     │  ├─ ReflectionException.php
   │  │     │  ├─ ReportAlreadyFinalizedException.php
   │  │     │  ├─ StaticAnalysisCacheNotConfiguredException.php
   │  │     │  ├─ TestIdMissingException.php
   │  │     │  ├─ UnintentionallyCoveredCodeException.php
   │  │     │  ├─ WriteOperationFailedException.php
   │  │     │  ├─ XdebugNotAvailableException.php
   │  │     │  ├─ XdebugNotEnabledException.php
   │  │     │  └─ XmlException.php
   │  │     ├─ Filter.php
   │  │     ├─ Node
   │  │     │  ├─ AbstractNode.php
   │  │     │  ├─ Builder.php
   │  │     │  ├─ CrapIndex.php
   │  │     │  ├─ Directory.php
   │  │     │  ├─ File.php
   │  │     │  └─ Iterator.php
   │  │     ├─ Report
   │  │     │  ├─ Clover.php
   │  │     │  ├─ Cobertura.php
   │  │     │  ├─ Crap4j.php
   │  │     │  ├─ Html
   │  │     │  │  ├─ Colors.php
   │  │     │  │  ├─ CustomCssFile.php
   │  │     │  │  ├─ Facade.php
   │  │     │  │  ├─ Renderer
   │  │     │  │  │  ├─ Dashboard.php
   │  │     │  │  │  ├─ Directory.php
   │  │     │  │  │  ├─ File.php
   │  │     │  │  │  └─ Template
   │  │     │  │  │     ├─ branches.html.dist
   │  │     │  │  │     ├─ coverage_bar.html.dist
   │  │     │  │  │     ├─ coverage_bar_branch.html.dist
   │  │     │  │  │     ├─ css
   │  │     │  │  │     │  ├─ bootstrap.min.css
   │  │     │  │  │     │  ├─ custom.css
   │  │     │  │  │     │  ├─ nv.d3.min.css
   │  │     │  │  │     │  ├─ octicons.css
   │  │     │  │  │     │  └─ style.css
   │  │     │  │  │     ├─ dashboard.html.dist
   │  │     │  │  │     ├─ dashboard_branch.html.dist
   │  │     │  │  │     ├─ directory.html.dist
   │  │     │  │  │     ├─ directory_branch.html.dist
   │  │     │  │  │     ├─ directory_item.html.dist
   │  │     │  │  │     ├─ directory_item_branch.html.dist
   │  │     │  │  │     ├─ file.html.dist
   │  │     │  │  │     ├─ file_branch.html.dist
   │  │     │  │  │     ├─ file_item.html.dist
   │  │     │  │  │     ├─ file_item_branch.html.dist
   │  │     │  │  │     ├─ icons
   │  │     │  │  │     │  ├─ file-code.svg
   │  │     │  │  │     │  └─ file-directory.svg
   │  │     │  │  │     ├─ js
   │  │     │  │  │     │  ├─ bootstrap.min.js
   │  │     │  │  │     │  ├─ d3.min.js
   │  │     │  │  │     │  ├─ file.js
   │  │     │  │  │     │  ├─ jquery.min.js
   │  │     │  │  │     │  ├─ nv.d3.min.js
   │  │     │  │  │     │  └─ popper.min.js
   │  │     │  │  │     ├─ line.html.dist
   │  │     │  │  │     ├─ lines.html.dist
   │  │     │  │  │     ├─ method_item.html.dist
   │  │     │  │  │     ├─ method_item_branch.html.dist
   │  │     │  │  │     └─ paths.html.dist
   │  │     │  │  └─ Renderer.php
   │  │     │  ├─ PHP.php
   │  │     │  ├─ Text.php
   │  │     │  ├─ Thresholds.php
   │  │     │  └─ Xml
   │  │     │     ├─ BuildInformation.php
   │  │     │     ├─ Coverage.php
   │  │     │     ├─ Directory.php
   │  │     │     ├─ Facade.php
   │  │     │     ├─ File.php
   │  │     │     ├─ Method.php
   │  │     │     ├─ Node.php
   │  │     │     ├─ Project.php
   │  │     │     ├─ Report.php
   │  │     │     ├─ Source.php
   │  │     │     ├─ Tests.php
   │  │     │     ├─ Totals.php
   │  │     │     └─ Unit.php
   │  │     ├─ StaticAnalysis
   │  │     │  ├─ CacheWarmer.php
   │  │     │  ├─ CachingFileAnalyser.php
   │  │     │  ├─ CodeUnitFindingVisitor.php
   │  │     │  ├─ ExecutableLinesFindingVisitor.php
   │  │     │  ├─ FileAnalyser.php
   │  │     │  ├─ IgnoredLinesFindingVisitor.php
   │  │     │  └─ ParsingFileAnalyser.php
   │  │     ├─ TestSize
   │  │     │  ├─ Known.php
   │  │     │  ├─ Large.php
   │  │     │  ├─ Medium.php
   │  │     │  ├─ Small.php
   │  │     │  ├─ TestSize.php
   │  │     │  └─ Unknown.php
   │  │     ├─ TestStatus
   │  │     │  ├─ Failure.php
   │  │     │  ├─ Known.php
   │  │     │  ├─ Success.php
   │  │     │  ├─ TestStatus.php
   │  │     │  └─ Unknown.php
   │  │     ├─ Util
   │  │     │  ├─ Filesystem.php
   │  │     │  └─ Percentage.php
   │  │     └─ Version.php
   │  ├─ php-file-iterator
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ ExcludeIterator.php
   │  │     ├─ Facade.php
   │  │     ├─ Factory.php
   │  │     └─ Iterator.php
   │  ├─ php-invoker
   │  │  ├─ .psalm
   │  │  │  ├─ baseline.xml
   │  │  │  └─ config.xml
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ Invoker.php
   │  │     └─ exceptions
   │  │        ├─ Exception.php
   │  │        ├─ ProcessControlExtensionNotLoadedException.php
   │  │        └─ TimeoutException.php
   │  ├─ php-text-template
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ Template.php
   │  │     └─ exceptions
   │  │        ├─ Exception.php
   │  │        ├─ InvalidArgumentException.php
   │  │        └─ RuntimeException.php
   │  ├─ php-timer
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ Duration.php
   │  │     ├─ ResourceUsageFormatter.php
   │  │     ├─ Timer.php
   │  │     └─ exceptions
   │  │        ├─ Exception.php
   │  │        ├─ NoActiveTimerException.php
   │  │        └─ TimeSinceStartOfRequestNotAvailableException.php
   │  └─ phpunit
   │     ├─ ChangeLog-10.5.md
   │     ├─ DEPRECATIONS.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ SECURITY.md
   │     ├─ composer.json
   │     ├─ phpunit
   │     ├─ phpunit.xsd
   │     ├─ schema
   │     │  ├─ 10.0.xsd
   │     │  ├─ 10.1.xsd
   │     │  ├─ 10.2.xsd
   │     │  ├─ 10.3.xsd
   │     │  ├─ 10.4.xsd
   │     │  ├─ 8.5.xsd
   │     │  ├─ 9.0.xsd
   │     │  ├─ 9.1.xsd
   │     │  ├─ 9.2.xsd
   │     │  ├─ 9.3.xsd
   │     │  ├─ 9.4.xsd
   │     │  └─ 9.5.xsd
   │     └─ src
   │        ├─ Event
   │        │  ├─ Dispatcher
   │        │  │  ├─ CollectingDispatcher.php
   │        │  │  ├─ DeferringDispatcher.php
   │        │  │  ├─ DirectDispatcher.php
   │        │  │  ├─ Dispatcher.php
   │        │  │  └─ SubscribableDispatcher.php
   │        │  ├─ Emitter
   │        │  │  ├─ DispatchingEmitter.php
   │        │  │  └─ Emitter.php
   │        │  ├─ Events
   │        │  │  ├─ Application
   │        │  │  │  ├─ Finished.php
   │        │  │  │  ├─ FinishedSubscriber.php
   │        │  │  │  ├─ Started.php
   │        │  │  │  └─ StartedSubscriber.php
   │        │  │  ├─ Event.php
   │        │  │  ├─ EventCollection.php
   │        │  │  ├─ EventCollectionIterator.php
   │        │  │  ├─ Test
   │        │  │  │  ├─ Assertion
   │        │  │  │  │  ├─ AssertionFailed.php
   │        │  │  │  │  ├─ AssertionFailedSubscriber.php
   │        │  │  │  │  ├─ AssertionSucceeded.php
   │        │  │  │  │  └─ AssertionSucceededSubscriber.php
   │        │  │  │  ├─ ComparatorRegistered.php
   │        │  │  │  ├─ ComparatorRegisteredSubscriber.php
   │        │  │  │  ├─ HookMethod
   │        │  │  │  │  ├─ AfterLastTestMethodCalled.php
   │        │  │  │  │  ├─ AfterLastTestMethodCalledSubscriber.php
   │        │  │  │  │  ├─ AfterLastTestMethodErrored.php
   │        │  │  │  │  ├─ AfterLastTestMethodErroredSubscriber.php
   │        │  │  │  │  ├─ AfterLastTestMethodFinished.php
   │        │  │  │  │  ├─ AfterLastTestMethodFinishedSubscriber.php
   │        │  │  │  │  ├─ AfterTestMethodCalled.php
   │        │  │  │  │  ├─ AfterTestMethodCalledSubscriber.php
   │        │  │  │  │  ├─ AfterTestMethodErrored.php
   │        │  │  │  │  ├─ AfterTestMethodErroredSubscriber.php
   │        │  │  │  │  ├─ AfterTestMethodFinished.php
   │        │  │  │  │  ├─ AfterTestMethodFinishedSubscriber.php
   │        │  │  │  │  ├─ BeforeFirstTestMethodCalled.php
   │        │  │  │  │  ├─ BeforeFirstTestMethodCalledSubscriber.php
   │        │  │  │  │  ├─ BeforeFirstTestMethodErrored.php
   │        │  │  │  │  ├─ BeforeFirstTestMethodErroredSubscriber.php
   │        │  │  │  │  ├─ BeforeFirstTestMethodFinished.php
   │        │  │  │  │  ├─ BeforeFirstTestMethodFinishedSubscriber.php
   │        │  │  │  │  ├─ BeforeTestMethodCalled.php
   │        │  │  │  │  ├─ BeforeTestMethodCalledSubscriber.php
   │        │  │  │  │  ├─ BeforeTestMethodErrored.php
   │        │  │  │  │  ├─ BeforeTestMethodErroredSubscriber.php
   │        │  │  │  │  ├─ BeforeTestMethodFinished.php
   │        │  │  │  │  ├─ BeforeTestMethodFinishedSubscriber.php
   │        │  │  │  │  ├─ PostConditionCalled.php
   │        │  │  │  │  ├─ PostConditionCalledSubscriber.php
   │        │  │  │  │  ├─ PostConditionErrored.php
   │        │  │  │  │  ├─ PostConditionErroredSubscriber.php
   │        │  │  │  │  ├─ PostConditionFinished.php
   │        │  │  │  │  ├─ PostConditionFinishedSubscriber.php
   │        │  │  │  │  ├─ PreConditionCalled.php
   │        │  │  │  │  ├─ PreConditionCalledSubscriber.php
   │        │  │  │  │  ├─ PreConditionErrored.php
   │        │  │  │  │  ├─ PreConditionErroredSubscriber.php
   │        │  │  │  │  ├─ PreConditionFinished.php
   │        │  │  │  │  └─ PreConditionFinishedSubscriber.php
   │        │  │  │  ├─ Issue
   │        │  │  │  │  ├─ ConsideredRisky.php
   │        │  │  │  │  ├─ ConsideredRiskySubscriber.php
   │        │  │  │  │  ├─ DeprecationTriggered.php
   │        │  │  │  │  ├─ DeprecationTriggeredSubscriber.php
   │        │  │  │  │  ├─ ErrorTriggered.php
   │        │  │  │  │  ├─ ErrorTriggeredSubscriber.php
   │        │  │  │  │  ├─ NoticeTriggered.php
   │        │  │  │  │  ├─ NoticeTriggeredSubscriber.php
   │        │  │  │  │  ├─ PhpDeprecationTriggered.php
   │        │  │  │  │  ├─ PhpDeprecationTriggeredSubscriber.php
   │        │  │  │  │  ├─ PhpNoticeTriggered.php
   │        │  │  │  │  ├─ PhpNoticeTriggeredSubscriber.php
   │        │  │  │  │  ├─ PhpWarningTriggered.php
   │        │  │  │  │  ├─ PhpWarningTriggeredSubscriber.php
   │        │  │  │  │  ├─ PhpunitDeprecationTriggered.php
   │        │  │  │  │  ├─ PhpunitDeprecationTriggeredSubscriber.php
   │        │  │  │  │  ├─ PhpunitErrorTriggered.php
   │        │  │  │  │  ├─ PhpunitErrorTriggeredSubscriber.php
   │        │  │  │  │  ├─ PhpunitWarningTriggered.php
   │        │  │  │  │  ├─ PhpunitWarningTriggeredSubscriber.php
   │        │  │  │  │  ├─ WarningTriggered.php
   │        │  │  │  │  └─ WarningTriggeredSubscriber.php
   │        │  │  │  ├─ Lifecycle
   │        │  │  │  │  ├─ DataProviderMethodCalled.php
   │        │  │  │  │  ├─ DataProviderMethodCalledSubscriber.php
   │        │  │  │  │  ├─ DataProviderMethodFinished.php
   │        │  │  │  │  ├─ DataProviderMethodFinishedSubscriber.php
   │        │  │  │  │  ├─ Finished.php
   │        │  │  │  │  ├─ FinishedSubscriber.php
   │        │  │  │  │  ├─ PreparationFailed.php
   │        │  │  │  │  ├─ PreparationFailedSubscriber.php
   │        │  │  │  │  ├─ PreparationStarted.php
   │        │  │  │  │  ├─ PreparationStartedSubscriber.php
   │        │  │  │  │  ├─ Prepared.php
   │        │  │  │  │  └─ PreparedSubscriber.php
   │        │  │  │  ├─ Outcome
   │        │  │  │  │  ├─ Errored.php
   │        │  │  │  │  ├─ ErroredSubscriber.php
   │        │  │  │  │  ├─ Failed.php
   │        │  │  │  │  ├─ FailedSubscriber.php
   │        │  │  │  │  ├─ MarkedIncomplete.php
   │        │  │  │  │  ├─ MarkedIncompleteSubscriber.php
   │        │  │  │  │  ├─ Passed.php
   │        │  │  │  │  ├─ PassedSubscriber.php
   │        │  │  │  │  ├─ Skipped.php
   │        │  │  │  │  └─ SkippedSubscriber.php
   │        │  │  │  ├─ PrintedUnexpectedOutput.php
   │        │  │  │  ├─ PrintedUnexpectedOutputSubscriber.php
   │        │  │  │  └─ TestDouble
   │        │  │  │     ├─ MockObjectCreated.php
   │        │  │  │     ├─ MockObjectCreatedSubscriber.php
   │        │  │  │     ├─ MockObjectForAbstractClassCreated.php
   │        │  │  │     ├─ MockObjectForAbstractClassCreatedSubscriber.php
   │        │  │  │     ├─ MockObjectForIntersectionOfInterfacesCreated.php
   │        │  │  │     ├─ MockObjectForIntersectionOfInterfacesCreatedSubscriber.php
   │        │  │  │     ├─ MockObjectForTraitCreated.php
   │        │  │  │     ├─ MockObjectForTraitCreatedSubscriber.php
   │        │  │  │     ├─ MockObjectFromWsdlCreated.php
   │        │  │  │     ├─ MockObjectFromWsdlCreatedSubscriber.php
   │        │  │  │     ├─ PartialMockObjectCreated.php
   │        │  │  │     ├─ PartialMockObjectCreatedSubscriber.php
   │        │  │  │     ├─ TestProxyCreated.php
   │        │  │  │     ├─ TestProxyCreatedSubscriber.php
   │        │  │  │     ├─ TestStubCreated.php
   │        │  │  │     ├─ TestStubCreatedSubscriber.php
   │        │  │  │     ├─ TestStubForIntersectionOfInterfacesCreated.php
   │        │  │  │     └─ TestStubForIntersectionOfInterfacesCreatedSubscriber.php
   │        │  │  ├─ TestRunner
   │        │  │  │  ├─ BootstrapFinished.php
   │        │  │  │  ├─ BootstrapFinishedSubscriber.php
   │        │  │  │  ├─ Configured.php
   │        │  │  │  ├─ ConfiguredSubscriber.php
   │        │  │  │  ├─ DeprecationTriggered.php
   │        │  │  │  ├─ DeprecationTriggeredSubscriber.php
   │        │  │  │  ├─ EventFacadeSealed.php
   │        │  │  │  ├─ EventFacadeSealedSubscriber.php
   │        │  │  │  ├─ ExecutionAborted.php
   │        │  │  │  ├─ ExecutionAbortedSubscriber.php
   │        │  │  │  ├─ ExecutionFinished.php
   │        │  │  │  ├─ ExecutionFinishedSubscriber.php
   │        │  │  │  ├─ ExecutionStarted.php
   │        │  │  │  ├─ ExecutionStartedSubscriber.php
   │        │  │  │  ├─ ExtensionBootstrapped.php
   │        │  │  │  ├─ ExtensionBootstrappedSubscriber.php
   │        │  │  │  ├─ ExtensionLoadedFromPhar.php
   │        │  │  │  ├─ ExtensionLoadedFromPharSubscriber.php
   │        │  │  │  ├─ Finished.php
   │        │  │  │  ├─ FinishedSubscriber.php
   │        │  │  │  ├─ GarbageCollectionDisabled.php
   │        │  │  │  ├─ GarbageCollectionDisabledSubscriber.php
   │        │  │  │  ├─ GarbageCollectionEnabled.php
   │        │  │  │  ├─ GarbageCollectionEnabledSubscriber.php
   │        │  │  │  ├─ GarbageCollectionTriggered.php
   │        │  │  │  ├─ GarbageCollectionTriggeredSubscriber.php
   │        │  │  │  ├─ Started.php
   │        │  │  │  ├─ StartedSubscriber.php
   │        │  │  │  ├─ WarningTriggered.php
   │        │  │  │  └─ WarningTriggeredSubscriber.php
   │        │  │  └─ TestSuite
   │        │  │     ├─ Filtered.php
   │        │  │     ├─ FilteredSubscriber.php
   │        │  │     ├─ Finished.php
   │        │  │     ├─ FinishedSubscriber.php
   │        │  │     ├─ Loaded.php
   │        │  │     ├─ LoadedSubscriber.php
   │        │  │     ├─ Skipped.php
   │        │  │     ├─ SkippedSubscriber.php
   │        │  │     ├─ Sorted.php
   │        │  │     ├─ SortedSubscriber.php
   │        │  │     ├─ Started.php
   │        │  │     └─ StartedSubscriber.php
   │        │  ├─ Exception
   │        │  │  ├─ EventAlreadyAssignedException.php
   │        │  │  ├─ EventFacadeIsSealedException.php
   │        │  │  ├─ Exception.php
   │        │  │  ├─ InvalidArgumentException.php
   │        │  │  ├─ InvalidEventException.php
   │        │  │  ├─ InvalidSubscriberException.php
   │        │  │  ├─ MapError.php
   │        │  │  ├─ MoreThanOneDataSetFromDataProviderException.php
   │        │  │  ├─ NoComparisonFailureException.php
   │        │  │  ├─ NoDataSetFromDataProviderException.php
   │        │  │  ├─ NoPreviousThrowableException.php
   │        │  │  ├─ NoTestCaseObjectOnCallStackException.php
   │        │  │  ├─ RuntimeException.php
   │        │  │  ├─ SubscriberTypeAlreadyRegisteredException.php
   │        │  │  ├─ UnknownEventException.php
   │        │  │  ├─ UnknownEventTypeException.php
   │        │  │  ├─ UnknownSubscriberException.php
   │        │  │  └─ UnknownSubscriberTypeException.php
   │        │  ├─ Facade.php
   │        │  ├─ Subscriber.php
   │        │  ├─ Tracer.php
   │        │  ├─ TypeMap.php
   │        │  └─ Value
   │        │     ├─ ClassMethod.php
   │        │     ├─ ComparisonFailure.php
   │        │     ├─ ComparisonFailureBuilder.php
   │        │     ├─ Runtime
   │        │     │  ├─ OperatingSystem.php
   │        │     │  ├─ PHP.php
   │        │     │  ├─ PHPUnit.php
   │        │     │  └─ Runtime.php
   │        │     ├─ Telemetry
   │        │     │  ├─ Duration.php
   │        │     │  ├─ GarbageCollectorStatus.php
   │        │     │  ├─ GarbageCollectorStatusProvider.php
   │        │     │  ├─ HRTime.php
   │        │     │  ├─ Info.php
   │        │     │  ├─ MemoryMeter.php
   │        │     │  ├─ MemoryUsage.php
   │        │     │  ├─ Php81GarbageCollectorStatusProvider.php
   │        │     │  ├─ Php83GarbageCollectorStatusProvider.php
   │        │     │  ├─ Snapshot.php
   │        │     │  ├─ StopWatch.php
   │        │     │  ├─ System.php
   │        │     │  ├─ SystemMemoryMeter.php
   │        │     │  ├─ SystemStopWatch.php
   │        │     │  └─ SystemStopWatchWithOffset.php
   │        │     ├─ Test
   │        │     │  ├─ Phpt.php
   │        │     │  ├─ Test.php
   │        │     │  ├─ TestCollection.php
   │        │     │  ├─ TestCollectionIterator.php
   │        │     │  ├─ TestData
   │        │     │  │  ├─ DataFromDataProvider.php
   │        │     │  │  ├─ DataFromTestDependency.php
   │        │     │  │  ├─ TestData.php
   │        │     │  │  ├─ TestDataCollection.php
   │        │     │  │  └─ TestDataCollectionIterator.php
   │        │     │  ├─ TestDox.php
   │        │     │  ├─ TestDoxBuilder.php
   │        │     │  ├─ TestMethod.php
   │        │     │  └─ TestMethodBuilder.php
   │        │     ├─ TestSuite
   │        │     │  ├─ TestSuite.php
   │        │     │  ├─ TestSuiteBuilder.php
   │        │     │  ├─ TestSuiteForTestClass.php
   │        │     │  ├─ TestSuiteForTestMethodWithDataProvider.php
   │        │     │  └─ TestSuiteWithName.php
   │        │     ├─ Throwable.php
   │        │     └─ ThrowableBuilder.php
   │        ├─ Exception.php
   │        ├─ Framework
   │        │  ├─ Assert
   │        │  │  └─ Functions.php
   │        │  ├─ Assert.php
   │        │  ├─ Attributes
   │        │  │  ├─ After.php
   │        │  │  ├─ AfterClass.php
   │        │  │  ├─ BackupGlobals.php
   │        │  │  ├─ BackupStaticProperties.php
   │        │  │  ├─ Before.php
   │        │  │  ├─ BeforeClass.php
   │        │  │  ├─ CodeCoverageIgnore.php
   │        │  │  ├─ CoversClass.php
   │        │  │  ├─ CoversFunction.php
   │        │  │  ├─ CoversNothing.php
   │        │  │  ├─ DataProvider.php
   │        │  │  ├─ DataProviderExternal.php
   │        │  │  ├─ Depends.php
   │        │  │  ├─ DependsExternal.php
   │        │  │  ├─ DependsExternalUsingDeepClone.php
   │        │  │  ├─ DependsExternalUsingShallowClone.php
   │        │  │  ├─ DependsOnClass.php
   │        │  │  ├─ DependsOnClassUsingDeepClone.php
   │        │  │  ├─ DependsOnClassUsingShallowClone.php
   │        │  │  ├─ DependsUsingDeepClone.php
   │        │  │  ├─ DependsUsingShallowClone.php
   │        │  │  ├─ DoesNotPerformAssertions.php
   │        │  │  ├─ ExcludeGlobalVariableFromBackup.php
   │        │  │  ├─ ExcludeStaticPropertyFromBackup.php
   │        │  │  ├─ Group.php
   │        │  │  ├─ IgnoreClassForCodeCoverage.php
   │        │  │  ├─ IgnoreDeprecations.php
   │        │  │  ├─ IgnoreFunctionForCodeCoverage.php
   │        │  │  ├─ IgnoreMethodForCodeCoverage.php
   │        │  │  ├─ Large.php
   │        │  │  ├─ Medium.php
   │        │  │  ├─ PostCondition.php
   │        │  │  ├─ PreCondition.php
   │        │  │  ├─ PreserveGlobalState.php
   │        │  │  ├─ RequiresFunction.php
   │        │  │  ├─ RequiresMethod.php
   │        │  │  ├─ RequiresOperatingSystem.php
   │        │  │  ├─ RequiresOperatingSystemFamily.php
   │        │  │  ├─ RequiresPhp.php
   │        │  │  ├─ RequiresPhpExtension.php
   │        │  │  ├─ RequiresPhpunit.php
   │        │  │  ├─ RequiresSetting.php
   │        │  │  ├─ RunClassInSeparateProcess.php
   │        │  │  ├─ RunInSeparateProcess.php
   │        │  │  ├─ RunTestsInSeparateProcesses.php
   │        │  │  ├─ Small.php
   │        │  │  ├─ Test.php
   │        │  │  ├─ TestDox.php
   │        │  │  ├─ TestWith.php
   │        │  │  ├─ TestWithJson.php
   │        │  │  ├─ Ticket.php
   │        │  │  ├─ UsesClass.php
   │        │  │  ├─ UsesFunction.php
   │        │  │  └─ WithoutErrorHandler.php
   │        │  ├─ Constraint
   │        │  │  ├─ Boolean
   │        │  │  │  ├─ IsFalse.php
   │        │  │  │  └─ IsTrue.php
   │        │  │  ├─ Callback.php
   │        │  │  ├─ Cardinality
   │        │  │  │  ├─ Count.php
   │        │  │  │  ├─ GreaterThan.php
   │        │  │  │  ├─ IsEmpty.php
   │        │  │  │  ├─ LessThan.php
   │        │  │  │  └─ SameSize.php
   │        │  │  ├─ Constraint.php
   │        │  │  ├─ Equality
   │        │  │  │  ├─ IsEqual.php
   │        │  │  │  ├─ IsEqualCanonicalizing.php
   │        │  │  │  ├─ IsEqualIgnoringCase.php
   │        │  │  │  └─ IsEqualWithDelta.php
   │        │  │  ├─ Exception
   │        │  │  │  ├─ Exception.php
   │        │  │  │  ├─ ExceptionCode.php
   │        │  │  │  ├─ ExceptionMessageIsOrContains.php
   │        │  │  │  └─ ExceptionMessageMatchesRegularExpression.php
   │        │  │  ├─ Filesystem
   │        │  │  │  ├─ DirectoryExists.php
   │        │  │  │  ├─ FileExists.php
   │        │  │  │  ├─ IsReadable.php
   │        │  │  │  └─ IsWritable.php
   │        │  │  ├─ IsAnything.php
   │        │  │  ├─ IsIdentical.php
   │        │  │  ├─ JsonMatches.php
   │        │  │  ├─ Math
   │        │  │  │  ├─ IsFinite.php
   │        │  │  │  ├─ IsInfinite.php
   │        │  │  │  └─ IsNan.php
   │        │  │  ├─ Object
   │        │  │  │  ├─ ObjectEquals.php
   │        │  │  │  └─ ObjectHasProperty.php
   │        │  │  ├─ Operator
   │        │  │  │  ├─ BinaryOperator.php
   │        │  │  │  ├─ LogicalAnd.php
   │        │  │  │  ├─ LogicalNot.php
   │        │  │  │  ├─ LogicalOr.php
   │        │  │  │  ├─ LogicalXor.php
   │        │  │  │  ├─ Operator.php
   │        │  │  │  └─ UnaryOperator.php
   │        │  │  ├─ String
   │        │  │  │  ├─ IsJson.php
   │        │  │  │  ├─ RegularExpression.php
   │        │  │  │  ├─ StringContains.php
   │        │  │  │  ├─ StringEndsWith.php
   │        │  │  │  ├─ StringEqualsStringIgnoringLineEndings.php
   │        │  │  │  ├─ StringMatchesFormatDescription.php
   │        │  │  │  └─ StringStartsWith.php
   │        │  │  ├─ Traversable
   │        │  │  │  ├─ ArrayHasKey.php
   │        │  │  │  ├─ IsList.php
   │        │  │  │  ├─ TraversableContains.php
   │        │  │  │  ├─ TraversableContainsEqual.php
   │        │  │  │  ├─ TraversableContainsIdentical.php
   │        │  │  │  └─ TraversableContainsOnly.php
   │        │  │  └─ Type
   │        │  │     ├─ IsInstanceOf.php
   │        │  │     ├─ IsNull.php
   │        │  │     └─ IsType.php
   │        │  ├─ DataProviderTestSuite.php
   │        │  ├─ Exception
   │        │  │  ├─ AssertionFailedError.php
   │        │  │  ├─ CodeCoverageException.php
   │        │  │  ├─ EmptyStringException.php
   │        │  │  ├─ Exception.php
   │        │  │  ├─ ExpectationFailedException.php
   │        │  │  ├─ GeneratorNotSupportedException.php
   │        │  │  ├─ Incomplete
   │        │  │  │  ├─ IncompleteTest.php
   │        │  │  │  └─ IncompleteTestError.php
   │        │  │  ├─ InvalidArgumentException.php
   │        │  │  ├─ InvalidCoversTargetException.php
   │        │  │  ├─ InvalidDataProviderException.php
   │        │  │  ├─ InvalidDependencyException.php
   │        │  │  ├─ NoChildTestSuiteException.php
   │        │  │  ├─ ObjectEquals
   │        │  │  │  ├─ ActualValueIsNotAnObjectException.php
   │        │  │  │  ├─ ComparisonMethodDoesNotAcceptParameterTypeException.php
   │        │  │  │  ├─ ComparisonMethodDoesNotDeclareBoolReturnTypeException.php
   │        │  │  │  ├─ ComparisonMethodDoesNotDeclareExactlyOneParameterException.php
   │        │  │  │  ├─ ComparisonMethodDoesNotDeclareParameterTypeException.php
   │        │  │  │  └─ ComparisonMethodDoesNotExistException.php
   │        │  │  ├─ PhptAssertionFailedError.php
   │        │  │  ├─ ProcessIsolationException.php
   │        │  │  ├─ Skipped
   │        │  │  │  ├─ SkippedTest.php
   │        │  │  │  ├─ SkippedTestSuiteError.php
   │        │  │  │  └─ SkippedWithMessageException.php
   │        │  │  ├─ UnknownClassOrInterfaceException.php
   │        │  │  └─ UnknownTypeException.php
   │        │  ├─ ExecutionOrderDependency.php
   │        │  ├─ MockObject
   │        │  │  ├─ ConfigurableMethod.php
   │        │  │  ├─ Exception
   │        │  │  │  ├─ BadMethodCallException.php
   │        │  │  │  ├─ CannotUseOnlyMethodsException.php
   │        │  │  │  ├─ Exception.php
   │        │  │  │  ├─ IncompatibleReturnValueException.php
   │        │  │  │  ├─ MatchBuilderNotFoundException.php
   │        │  │  │  ├─ MatcherAlreadyRegisteredException.php
   │        │  │  │  ├─ MethodCannotBeConfiguredException.php
   │        │  │  │  ├─ MethodNameAlreadyConfiguredException.php
   │        │  │  │  ├─ MethodNameNotConfiguredException.php
   │        │  │  │  ├─ MethodParametersAlreadyConfiguredException.php
   │        │  │  │  ├─ NeverReturningMethodException.php
   │        │  │  │  ├─ NoMoreReturnValuesConfiguredException.php
   │        │  │  │  ├─ ReturnValueNotConfiguredException.php
   │        │  │  │  └─ RuntimeException.php
   │        │  │  ├─ Generator
   │        │  │  │  ├─ Exception
   │        │  │  │  │  ├─ CannotUseAddMethodsException.php
   │        │  │  │  │  ├─ ClassIsEnumerationException.php
   │        │  │  │  │  ├─ ClassIsFinalException.php
   │        │  │  │  │  ├─ ClassIsReadonlyException.php
   │        │  │  │  │  ├─ DuplicateMethodException.php
   │        │  │  │  │  ├─ Exception.php
   │        │  │  │  │  ├─ InvalidMethodNameException.php
   │        │  │  │  │  ├─ NameAlreadyInUseException.php
   │        │  │  │  │  ├─ OriginalConstructorInvocationRequiredException.php
   │        │  │  │  │  ├─ ReflectionException.php
   │        │  │  │  │  ├─ RuntimeException.php
   │        │  │  │  │  ├─ SoapExtensionNotAvailableException.php
   │        │  │  │  │  ├─ UnknownClassException.php
   │        │  │  │  │  ├─ UnknownTraitException.php
   │        │  │  │  │  └─ UnknownTypeException.php
   │        │  │  │  ├─ Generator.php
   │        │  │  │  ├─ MockClass.php
   │        │  │  │  ├─ MockMethod.php
   │        │  │  │  ├─ MockMethodSet.php
   │        │  │  │  ├─ MockTrait.php
   │        │  │  │  ├─ MockType.php
   │        │  │  │  ├─ TemplateLoader.php
   │        │  │  │  └─ templates
   │        │  │  │     ├─ deprecation.tpl
   │        │  │  │     ├─ doubled_method.tpl
   │        │  │  │     ├─ doubled_static_method.tpl
   │        │  │  │     ├─ intersection.tpl
   │        │  │  │     ├─ proxied_method.tpl
   │        │  │  │     ├─ test_double_class.tpl
   │        │  │  │     ├─ trait_class.tpl
   │        │  │  │     ├─ wsdl_class.tpl
   │        │  │  │     └─ wsdl_method.tpl
   │        │  │  ├─ MockBuilder.php
   │        │  │  └─ Runtime
   │        │  │     ├─ Api
   │        │  │     │  ├─ DoubledCloneMethod.php
   │        │  │     │  ├─ Method.php
   │        │  │     │  ├─ MockObjectApi.php
   │        │  │     │  ├─ ProxiedCloneMethod.php
   │        │  │     │  └─ StubApi.php
   │        │  │     ├─ Builder
   │        │  │     │  ├─ Identity.php
   │        │  │     │  ├─ InvocationMocker.php
   │        │  │     │  ├─ InvocationStubber.php
   │        │  │     │  ├─ MethodNameMatch.php
   │        │  │     │  ├─ ParametersMatch.php
   │        │  │     │  └─ Stub.php
   │        │  │     ├─ Interface
   │        │  │     │  ├─ MockObject.php
   │        │  │     │  ├─ MockObjectInternal.php
   │        │  │     │  ├─ Stub.php
   │        │  │     │  └─ StubInternal.php
   │        │  │     ├─ Invocation.php
   │        │  │     ├─ InvocationHandler.php
   │        │  │     ├─ Matcher.php
   │        │  │     ├─ MethodNameConstraint.php
   │        │  │     ├─ ReturnValueGenerator.php
   │        │  │     ├─ Rule
   │        │  │     │  ├─ AnyInvokedCount.php
   │        │  │     │  ├─ AnyParameters.php
   │        │  │     │  ├─ InvocationOrder.php
   │        │  │     │  ├─ InvokedAtLeastCount.php
   │        │  │     │  ├─ InvokedAtLeastOnce.php
   │        │  │     │  ├─ InvokedAtMostCount.php
   │        │  │     │  ├─ InvokedCount.php
   │        │  │     │  ├─ MethodName.php
   │        │  │     │  ├─ Parameters.php
   │        │  │     │  └─ ParametersRule.php
   │        │  │     └─ Stub
   │        │  │        ├─ ConsecutiveCalls.php
   │        │  │        ├─ Exception.php
   │        │  │        ├─ ReturnArgument.php
   │        │  │        ├─ ReturnCallback.php
   │        │  │        ├─ ReturnReference.php
   │        │  │        ├─ ReturnSelf.php
   │        │  │        ├─ ReturnStub.php
   │        │  │        ├─ ReturnValueMap.php
   │        │  │        └─ Stub.php
   │        │  ├─ Reorderable.php
   │        │  ├─ SelfDescribing.php
   │        │  ├─ Test.php
   │        │  ├─ TestBuilder.php
   │        │  ├─ TestCase.php
   │        │  ├─ TestRunner.php
   │        │  ├─ TestSize
   │        │  │  ├─ Known.php
   │        │  │  ├─ Large.php
   │        │  │  ├─ Medium.php
   │        │  │  ├─ Small.php
   │        │  │  ├─ TestSize.php
   │        │  │  └─ Unknown.php
   │        │  ├─ TestStatus
   │        │  │  ├─ Deprecation.php
   │        │  │  ├─ Error.php
   │        │  │  ├─ Failure.php
   │        │  │  ├─ Incomplete.php
   │        │  │  ├─ Known.php
   │        │  │  ├─ Notice.php
   │        │  │  ├─ Risky.php
   │        │  │  ├─ Skipped.php
   │        │  │  ├─ Success.php
   │        │  │  ├─ TestStatus.php
   │        │  │  ├─ Unknown.php
   │        │  │  └─ Warning.php
   │        │  ├─ TestSuite.php
   │        │  └─ TestSuiteIterator.php
   │        ├─ Logging
   │        │  ├─ EventLogger.php
   │        │  ├─ JUnit
   │        │  │  ├─ JunitXmlLogger.php
   │        │  │  └─ Subscriber
   │        │  │     ├─ Subscriber.php
   │        │  │     ├─ TestErroredSubscriber.php
   │        │  │     ├─ TestFailedSubscriber.php
   │        │  │     ├─ TestFinishedSubscriber.php
   │        │  │     ├─ TestMarkedIncompleteSubscriber.php
   │        │  │     ├─ TestPreparationFailedSubscriber.php
   │        │  │     ├─ TestPreparationStartedSubscriber.php
   │        │  │     ├─ TestPreparedSubscriber.php
   │        │  │     ├─ TestPrintedUnexpectedOutputSubscriber.php
   │        │  │     ├─ TestRunnerExecutionFinishedSubscriber.php
   │        │  │     ├─ TestSkippedSubscriber.php
   │        │  │     ├─ TestSuiteFinishedSubscriber.php
   │        │  │     └─ TestSuiteStartedSubscriber.php
   │        │  ├─ TeamCity
   │        │  │  ├─ Subscriber
   │        │  │  │  ├─ Subscriber.php
   │        │  │  │  ├─ TestConsideredRiskySubscriber.php
   │        │  │  │  ├─ TestErroredSubscriber.php
   │        │  │  │  ├─ TestFailedSubscriber.php
   │        │  │  │  ├─ TestFinishedSubscriber.php
   │        │  │  │  ├─ TestMarkedIncompleteSubscriber.php
   │        │  │  │  ├─ TestPreparedSubscriber.php
   │        │  │  │  ├─ TestRunnerExecutionFinishedSubscriber.php
   │        │  │  │  ├─ TestSkippedSubscriber.php
   │        │  │  │  ├─ TestSuiteBeforeFirstTestMethodErroredSubscriber.php
   │        │  │  │  ├─ TestSuiteFinishedSubscriber.php
   │        │  │  │  ├─ TestSuiteSkippedSubscriber.php
   │        │  │  │  └─ TestSuiteStartedSubscriber.php
   │        │  │  └─ TeamCityLogger.php
   │        │  └─ TestDox
   │        │     ├─ HtmlRenderer.php
   │        │     ├─ NamePrettifier.php
   │        │     ├─ PlainTextRenderer.php
   │        │     └─ TestResult
   │        │        ├─ Subscriber
   │        │        │  ├─ Subscriber.php
   │        │        │  ├─ TestConsideredRiskySubscriber.php
   │        │        │  ├─ TestErroredSubscriber.php
   │        │        │  ├─ TestFailedSubscriber.php
   │        │        │  ├─ TestFinishedSubscriber.php
   │        │        │  ├─ TestMarkedIncompleteSubscriber.php
   │        │        │  ├─ TestPassedSubscriber.php
   │        │        │  ├─ TestPreparedSubscriber.php
   │        │        │  ├─ TestSkippedSubscriber.php
   │        │        │  ├─ TestTriggeredDeprecationSubscriber.php
   │        │        │  ├─ TestTriggeredNoticeSubscriber.php
   │        │        │  ├─ TestTriggeredPhpDeprecationSubscriber.php
   │        │        │  ├─ TestTriggeredPhpNoticeSubscriber.php
   │        │        │  ├─ TestTriggeredPhpWarningSubscriber.php
   │        │        │  ├─ TestTriggeredPhpunitDeprecationSubscriber.php
   │        │        │  ├─ TestTriggeredPhpunitErrorSubscriber.php
   │        │        │  ├─ TestTriggeredPhpunitWarningSubscriber.php
   │        │        │  └─ TestTriggeredWarningSubscriber.php
   │        │        ├─ TestResult.php
   │        │        ├─ TestResultCollection.php
   │        │        ├─ TestResultCollectionIterator.php
   │        │        └─ TestResultCollector.php
   │        ├─ Metadata
   │        │  ├─ After.php
   │        │  ├─ AfterClass.php
   │        │  ├─ Api
   │        │  │  ├─ CodeCoverage.php
   │        │  │  ├─ DataProvider.php
   │        │  │  ├─ Dependencies.php
   │        │  │  ├─ Groups.php
   │        │  │  ├─ HookMethods.php
   │        │  │  └─ Requirements.php
   │        │  ├─ BackupGlobals.php
   │        │  ├─ BackupStaticProperties.php
   │        │  ├─ Before.php
   │        │  ├─ BeforeClass.php
   │        │  ├─ Covers.php
   │        │  ├─ CoversClass.php
   │        │  ├─ CoversDefaultClass.php
   │        │  ├─ CoversFunction.php
   │        │  ├─ CoversNothing.php
   │        │  ├─ DataProvider.php
   │        │  ├─ DependsOnClass.php
   │        │  ├─ DependsOnMethod.php
   │        │  ├─ DoesNotPerformAssertions.php
   │        │  ├─ Exception
   │        │  │  ├─ AnnotationsAreNotSupportedForInternalClassesException.php
   │        │  │  ├─ Exception.php
   │        │  │  ├─ InvalidAttributeException.php
   │        │  │  ├─ InvalidVersionRequirementException.php
   │        │  │  ├─ NoVersionRequirementException.php
   │        │  │  └─ ReflectionException.php
   │        │  ├─ ExcludeGlobalVariableFromBackup.php
   │        │  ├─ ExcludeStaticPropertyFromBackup.php
   │        │  ├─ Group.php
   │        │  ├─ IgnoreClassForCodeCoverage.php
   │        │  ├─ IgnoreDeprecations.php
   │        │  ├─ IgnoreFunctionForCodeCoverage.php
   │        │  ├─ IgnoreMethodForCodeCoverage.php
   │        │  ├─ Metadata.php
   │        │  ├─ MetadataCollection.php
   │        │  ├─ MetadataCollectionIterator.php
   │        │  ├─ Parser
   │        │  │  ├─ Annotation
   │        │  │  │  ├─ DocBlock.php
   │        │  │  │  └─ Registry.php
   │        │  │  ├─ AnnotationParser.php
   │        │  │  ├─ AttributeParser.php
   │        │  │  ├─ CachingParser.php
   │        │  │  ├─ Parser.php
   │        │  │  ├─ ParserChain.php
   │        │  │  └─ Registry.php
   │        │  ├─ PostCondition.php
   │        │  ├─ PreCondition.php
   │        │  ├─ PreserveGlobalState.php
   │        │  ├─ RequiresFunction.php
   │        │  ├─ RequiresMethod.php
   │        │  ├─ RequiresOperatingSystem.php
   │        │  ├─ RequiresOperatingSystemFamily.php
   │        │  ├─ RequiresPhp.php
   │        │  ├─ RequiresPhpExtension.php
   │        │  ├─ RequiresPhpunit.php
   │        │  ├─ RequiresSetting.php
   │        │  ├─ RunClassInSeparateProcess.php
   │        │  ├─ RunInSeparateProcess.php
   │        │  ├─ RunTestsInSeparateProcesses.php
   │        │  ├─ Test.php
   │        │  ├─ TestDox.php
   │        │  ├─ TestWith.php
   │        │  ├─ Uses.php
   │        │  ├─ UsesClass.php
   │        │  ├─ UsesDefaultClass.php
   │        │  ├─ UsesFunction.php
   │        │  ├─ Version
   │        │  │  ├─ ComparisonRequirement.php
   │        │  │  ├─ ConstraintRequirement.php
   │        │  │  └─ Requirement.php
   │        │  └─ WithoutErrorHandler.php
   │        ├─ Runner
   │        │  ├─ Baseline
   │        │  │  ├─ Baseline.php
   │        │  │  ├─ Exception
   │        │  │  │  ├─ CannotLoadBaselineException.php
   │        │  │  │  └─ FileDoesNotHaveLineException.php
   │        │  │  ├─ Generator.php
   │        │  │  ├─ Issue.php
   │        │  │  ├─ Reader.php
   │        │  │  ├─ RelativePathCalculator.php
   │        │  │  ├─ Subscriber
   │        │  │  │  ├─ Subscriber.php
   │        │  │  │  ├─ TestTriggeredDeprecationSubscriber.php
   │        │  │  │  ├─ TestTriggeredNoticeSubscriber.php
   │        │  │  │  ├─ TestTriggeredPhpDeprecationSubscriber.php
   │        │  │  │  ├─ TestTriggeredPhpNoticeSubscriber.php
   │        │  │  │  ├─ TestTriggeredPhpWarningSubscriber.php
   │        │  │  │  └─ TestTriggeredWarningSubscriber.php
   │        │  │  └─ Writer.php
   │        │  ├─ CodeCoverage.php
   │        │  ├─ ErrorHandler.php
   │        │  ├─ Exception
   │        │  │  ├─ ClassCannotBeFoundException.php
   │        │  │  ├─ ClassDoesNotExtendTestCaseException.php
   │        │  │  ├─ ClassIsAbstractException.php
   │        │  │  ├─ DirectoryDoesNotExistException.php
   │        │  │  ├─ ErrorException.php
   │        │  │  ├─ Exception.php
   │        │  │  ├─ FileDoesNotExistException.php
   │        │  │  ├─ InvalidOrderException.php
   │        │  │  ├─ InvalidPhptFileException.php
   │        │  │  ├─ ParameterDoesNotExistException.php
   │        │  │  ├─ PhptExternalFileCannotBeLoadedException.php
   │        │  │  └─ UnsupportedPhptSectionException.php
   │        │  ├─ Extension
   │        │  │  ├─ Extension.php
   │        │  │  ├─ ExtensionBootstrapper.php
   │        │  │  ├─ Facade.php
   │        │  │  ├─ ParameterCollection.php
   │        │  │  └─ PharLoader.php
   │        │  ├─ Filter
   │        │  │  ├─ ExcludeGroupFilterIterator.php
   │        │  │  ├─ Factory.php
   │        │  │  ├─ GroupFilterIterator.php
   │        │  │  ├─ IncludeGroupFilterIterator.php
   │        │  │  ├─ NameFilterIterator.php
   │        │  │  └─ TestIdFilterIterator.php
   │        │  ├─ GarbageCollection
   │        │  │  ├─ GarbageCollectionHandler.php
   │        │  │  └─ Subscriber
   │        │  │     ├─ ExecutionFinishedSubscriber.php
   │        │  │     ├─ ExecutionStartedSubscriber.php
   │        │  │     ├─ Subscriber.php
   │        │  │     └─ TestFinishedSubscriber.php
   │        │  ├─ PhptTestCase.php
   │        │  ├─ ResultCache
   │        │  │  ├─ DefaultResultCache.php
   │        │  │  ├─ NullResultCache.php
   │        │  │  ├─ ResultCache.php
   │        │  │  ├─ ResultCacheHandler.php
   │        │  │  └─ Subscriber
   │        │  │     ├─ Subscriber.php
   │        │  │     ├─ TestConsideredRiskySubscriber.php
   │        │  │     ├─ TestErroredSubscriber.php
   │        │  │     ├─ TestFailedSubscriber.php
   │        │  │     ├─ TestFinishedSubscriber.php
   │        │  │     ├─ TestMarkedIncompleteSubscriber.php
   │        │  │     ├─ TestPreparedSubscriber.php
   │        │  │     ├─ TestSkippedSubscriber.php
   │        │  │     ├─ TestSuiteFinishedSubscriber.php
   │        │  │     └─ TestSuiteStartedSubscriber.php
   │        │  ├─ TestResult
   │        │  │  ├─ Collector.php
   │        │  │  ├─ Facade.php
   │        │  │  ├─ Issue.php
   │        │  │  ├─ PassedTests.php
   │        │  │  ├─ Subscriber
   │        │  │  │  ├─ AfterTestClassMethodErroredSubscriber.php
   │        │  │  │  ├─ BeforeTestClassMethodErroredSubscriber.php
   │        │  │  │  ├─ ExecutionStartedSubscriber.php
   │        │  │  │  ├─ Subscriber.php
   │        │  │  │  ├─ TestConsideredRiskySubscriber.php
   │        │  │  │  ├─ TestErroredSubscriber.php
   │        │  │  │  ├─ TestFailedSubscriber.php
   │        │  │  │  ├─ TestFinishedSubscriber.php
   │        │  │  │  ├─ TestMarkedIncompleteSubscriber.php
   │        │  │  │  ├─ TestPreparedSubscriber.php
   │        │  │  │  ├─ TestRunnerTriggeredDeprecationSubscriber.php
   │        │  │  │  ├─ TestRunnerTriggeredWarningSubscriber.php
   │        │  │  │  ├─ TestSkippedSubscriber.php
   │        │  │  │  ├─ TestSuiteFinishedSubscriber.php
   │        │  │  │  ├─ TestSuiteSkippedSubscriber.php
   │        │  │  │  ├─ TestSuiteStartedSubscriber.php
   │        │  │  │  ├─ TestTriggeredDeprecationSubscriber.php
   │        │  │  │  ├─ TestTriggeredErrorSubscriber.php
   │        │  │  │  ├─ TestTriggeredNoticeSubscriber.php
   │        │  │  │  ├─ TestTriggeredPhpDeprecationSubscriber.php
   │        │  │  │  ├─ TestTriggeredPhpNoticeSubscriber.php
   │        │  │  │  ├─ TestTriggeredPhpWarningSubscriber.php
   │        │  │  │  ├─ TestTriggeredPhpunitDeprecationSubscriber.php
   │        │  │  │  ├─ TestTriggeredPhpunitErrorSubscriber.php
   │        │  │  │  ├─ TestTriggeredPhpunitWarningSubscriber.php
   │        │  │  │  └─ TestTriggeredWarningSubscriber.php
   │        │  │  └─ TestResult.php
   │        │  ├─ TestSuiteLoader.php
   │        │  ├─ TestSuiteSorter.php
   │        │  └─ Version.php
   │        ├─ TextUI
   │        │  ├─ Application.php
   │        │  ├─ Command
   │        │  │  ├─ Command.php
   │        │  │  ├─ Commands
   │        │  │  │  ├─ AtLeastVersionCommand.php
   │        │  │  │  ├─ CheckPhpConfigurationCommand.php
   │        │  │  │  ├─ GenerateConfigurationCommand.php
   │        │  │  │  ├─ ListGroupsCommand.php
   │        │  │  │  ├─ ListTestSuitesCommand.php
   │        │  │  │  ├─ ListTestsAsTextCommand.php
   │        │  │  │  ├─ ListTestsAsXmlCommand.php
   │        │  │  │  ├─ MigrateConfigurationCommand.php
   │        │  │  │  ├─ ShowHelpCommand.php
   │        │  │  │  ├─ ShowVersionCommand.php
   │        │  │  │  ├─ VersionCheckCommand.php
   │        │  │  │  └─ WarmCodeCoverageCacheCommand.php
   │        │  │  └─ Result.php
   │        │  ├─ Configuration
   │        │  │  ├─ Builder.php
   │        │  │  ├─ Cli
   │        │  │  │  ├─ Builder.php
   │        │  │  │  ├─ Configuration.php
   │        │  │  │  ├─ Exception.php
   │        │  │  │  └─ XmlConfigurationFileFinder.php
   │        │  │  ├─ CodeCoverageFilterRegistry.php
   │        │  │  ├─ Configuration.php
   │        │  │  ├─ Exception
   │        │  │  │  ├─ CannotFindSchemaException.php
   │        │  │  │  ├─ CodeCoverageReportNotConfiguredException.php
   │        │  │  │  ├─ ConfigurationCannotBeBuiltException.php
   │        │  │  │  ├─ Exception.php
   │        │  │  │  ├─ FilterNotConfiguredException.php
   │        │  │  │  ├─ LoggingNotConfiguredException.php
   │        │  │  │  ├─ NoBaselineException.php
   │        │  │  │  ├─ NoBootstrapException.php
   │        │  │  │  ├─ NoCacheDirectoryException.php
   │        │  │  │  ├─ NoCliArgumentException.php
   │        │  │  │  ├─ NoConfigurationFileException.php
   │        │  │  │  ├─ NoCoverageCacheDirectoryException.php
   │        │  │  │  ├─ NoCustomCssFileException.php
   │        │  │  │  ├─ NoDefaultTestSuiteException.php
   │        │  │  │  └─ NoPharExtensionDirectoryException.php
   │        │  │  ├─ Merger.php
   │        │  │  ├─ PhpHandler.php
   │        │  │  ├─ Registry.php
   │        │  │  ├─ SourceFilter.php
   │        │  │  ├─ SourceMapper.php
   │        │  │  ├─ TestSuiteBuilder.php
   │        │  │  ├─ Value
   │        │  │  │  ├─ Constant.php
   │        │  │  │  ├─ ConstantCollection.php
   │        │  │  │  ├─ ConstantCollectionIterator.php
   │        │  │  │  ├─ Directory.php
   │        │  │  │  ├─ DirectoryCollection.php
   │        │  │  │  ├─ DirectoryCollectionIterator.php
   │        │  │  │  ├─ ExtensionBootstrap.php
   │        │  │  │  ├─ ExtensionBootstrapCollection.php
   │        │  │  │  ├─ ExtensionBootstrapCollectionIterator.php
   │        │  │  │  ├─ File.php
   │        │  │  │  ├─ FileCollection.php
   │        │  │  │  ├─ FileCollectionIterator.php
   │        │  │  │  ├─ FilterDirectory.php
   │        │  │  │  ├─ FilterDirectoryCollection.php
   │        │  │  │  ├─ FilterDirectoryCollectionIterator.php
   │        │  │  │  ├─ Group.php
   │        │  │  │  ├─ GroupCollection.php
   │        │  │  │  ├─ GroupCollectionIterator.php
   │        │  │  │  ├─ IniSetting.php
   │        │  │  │  ├─ IniSettingCollection.php
   │        │  │  │  ├─ IniSettingCollectionIterator.php
   │        │  │  │  ├─ Php.php
   │        │  │  │  ├─ Source.php
   │        │  │  │  ├─ TestDirectory.php
   │        │  │  │  ├─ TestDirectoryCollection.php
   │        │  │  │  ├─ TestDirectoryCollectionIterator.php
   │        │  │  │  ├─ TestFile.php
   │        │  │  │  ├─ TestFileCollection.php
   │        │  │  │  ├─ TestFileCollectionIterator.php
   │        │  │  │  ├─ TestSuite.php
   │        │  │  │  ├─ TestSuiteCollection.php
   │        │  │  │  ├─ TestSuiteCollectionIterator.php
   │        │  │  │  ├─ Variable.php
   │        │  │  │  ├─ VariableCollection.php
   │        │  │  │  └─ VariableCollectionIterator.php
   │        │  │  └─ Xml
   │        │  │     ├─ CodeCoverage
   │        │  │     │  ├─ CodeCoverage.php
   │        │  │     │  └─ Report
   │        │  │     │     ├─ Clover.php
   │        │  │     │     ├─ Cobertura.php
   │        │  │     │     ├─ Crap4j.php
   │        │  │     │     ├─ Html.php
   │        │  │     │     ├─ Php.php
   │        │  │     │     ├─ Text.php
   │        │  │     │     └─ Xml.php
   │        │  │     ├─ Configuration.php
   │        │  │     ├─ DefaultConfiguration.php
   │        │  │     ├─ Exception.php
   │        │  │     ├─ Generator.php
   │        │  │     ├─ Groups.php
   │        │  │     ├─ LoadedFromFileConfiguration.php
   │        │  │     ├─ Loader.php
   │        │  │     ├─ Logging
   │        │  │     │  ├─ Junit.php
   │        │  │     │  ├─ Logging.php
   │        │  │     │  ├─ TeamCity.php
   │        │  │     │  └─ TestDox
   │        │  │     │     ├─ Html.php
   │        │  │     │     └─ Text.php
   │        │  │     ├─ Migration
   │        │  │     │  ├─ MigrationBuilder.php
   │        │  │     │  ├─ MigrationException.php
   │        │  │     │  ├─ Migrations
   │        │  │     │  │  ├─ ConvertLogTypes.php
   │        │  │     │  │  ├─ CoverageCloverToReport.php
   │        │  │     │  │  ├─ CoverageCrap4jToReport.php
   │        │  │     │  │  ├─ CoverageHtmlToReport.php
   │        │  │     │  │  ├─ CoveragePhpToReport.php
   │        │  │     │  │  ├─ CoverageTextToReport.php
   │        │  │     │  │  ├─ CoverageXmlToReport.php
   │        │  │     │  │  ├─ IntroduceCacheDirectoryAttribute.php
   │        │  │     │  │  ├─ IntroduceCoverageElement.php
   │        │  │     │  │  ├─ LogToReportMigration.php
   │        │  │     │  │  ├─ Migration.php
   │        │  │     │  │  ├─ MoveAttributesFromFilterWhitelistToCoverage.php
   │        │  │     │  │  ├─ MoveAttributesFromRootToCoverage.php
   │        │  │     │  │  ├─ MoveCoverageDirectoriesToSource.php
   │        │  │     │  │  ├─ MoveWhitelistExcludesToCoverage.php
   │        │  │     │  │  ├─ MoveWhitelistIncludesToCoverage.php
   │        │  │     │  │  ├─ RemoveBeStrictAboutResourceUsageDuringSmallTestsAttribute.php
   │        │  │     │  │  ├─ RemoveBeStrictAboutTodoAnnotatedTestsAttribute.php
   │        │  │     │  │  ├─ RemoveCacheResultFileAttribute.php
   │        │  │     │  │  ├─ RemoveCacheTokensAttribute.php
   │        │  │     │  │  ├─ RemoveConversionToExceptionsAttributes.php
   │        │  │     │  │  ├─ RemoveCoverageElementCacheDirectoryAttribute.php
   │        │  │     │  │  ├─ RemoveCoverageElementProcessUncoveredFilesAttribute.php
   │        │  │     │  │  ├─ RemoveEmptyFilter.php
   │        │  │     │  │  ├─ RemoveListeners.php
   │        │  │     │  │  ├─ RemoveLogTypes.php
   │        │  │     │  │  ├─ RemoveLoggingElements.php
   │        │  │     │  │  ├─ RemoveNoInteractionAttribute.php
   │        │  │     │  │  ├─ RemovePrinterAttributes.php
   │        │  │     │  │  ├─ RemoveTestDoxGroupsElement.php
   │        │  │     │  │  ├─ RemoveTestSuiteLoaderAttributes.php
   │        │  │     │  │  ├─ RemoveVerboseAttribute.php
   │        │  │     │  │  ├─ RenameBackupStaticAttributesAttribute.php
   │        │  │     │  │  ├─ RenameBeStrictAboutCoversAnnotationAttribute.php
   │        │  │     │  │  ├─ RenameForceCoversAnnotationAttribute.php
   │        │  │     │  │  └─ UpdateSchemaLocation.php
   │        │  │     │  ├─ Migrator.php
   │        │  │     │  └─ SnapshotNodeList.php
   │        │  │     ├─ PHPUnit.php
   │        │  │     ├─ SchemaDetector
   │        │  │     │  ├─ FailedSchemaDetectionResult.php
   │        │  │     │  ├─ SchemaDetectionResult.php
   │        │  │     │  ├─ SchemaDetector.php
   │        │  │     │  └─ SuccessfulSchemaDetectionResult.php
   │        │  │     ├─ SchemaFinder.php
   │        │  │     ├─ TestSuiteMapper.php
   │        │  │     └─ Validator
   │        │  │        ├─ ValidationResult.php
   │        │  │        └─ Validator.php
   │        │  ├─ Exception
   │        │  │  ├─ CannotOpenSocketException.php
   │        │  │  ├─ Exception.php
   │        │  │  ├─ InvalidSocketException.php
   │        │  │  ├─ RuntimeException.php
   │        │  │  ├─ TestDirectoryNotFoundException.php
   │        │  │  └─ TestFileNotFoundException.php
   │        │  ├─ Help.php
   │        │  ├─ Output
   │        │  │  ├─ Default
   │        │  │  │  ├─ ProgressPrinter
   │        │  │  │  │  ├─ ProgressPrinter.php
   │        │  │  │  │  └─ Subscriber
   │        │  │  │  │     ├─ BeforeTestClassMethodErroredSubscriber.php
   │        │  │  │  │     ├─ Subscriber.php
   │        │  │  │  │     ├─ TestConsideredRiskySubscriber.php
   │        │  │  │  │     ├─ TestErroredSubscriber.php
   │        │  │  │  │     ├─ TestFailedSubscriber.php
   │        │  │  │  │     ├─ TestFinishedSubscriber.php
   │        │  │  │  │     ├─ TestMarkedIncompleteSubscriber.php
   │        │  │  │  │     ├─ TestPreparedSubscriber.php
   │        │  │  │  │     ├─ TestRunnerExecutionStartedSubscriber.php
   │        │  │  │  │     ├─ TestSkippedSubscriber.php
   │        │  │  │  │     ├─ TestTriggeredDeprecationSubscriber.php
   │        │  │  │  │     ├─ TestTriggeredErrorSubscriber.php
   │        │  │  │  │     ├─ TestTriggeredNoticeSubscriber.php
   │        │  │  │  │     ├─ TestTriggeredPhpDeprecationSubscriber.php
   │        │  │  │  │     ├─ TestTriggeredPhpNoticeSubscriber.php
   │        │  │  │  │     ├─ TestTriggeredPhpWarningSubscriber.php
   │        │  │  │  │     ├─ TestTriggeredPhpunitDeprecationSubscriber.php
   │        │  │  │  │     ├─ TestTriggeredPhpunitWarningSubscriber.php
   │        │  │  │  │     └─ TestTriggeredWarningSubscriber.php
   │        │  │  │  ├─ ResultPrinter.php
   │        │  │  │  └─ UnexpectedOutputPrinter.php
   │        │  │  ├─ Facade.php
   │        │  │  ├─ Printer
   │        │  │  │  ├─ DefaultPrinter.php
   │        │  │  │  ├─ NullPrinter.php
   │        │  │  │  └─ Printer.php
   │        │  │  ├─ SummaryPrinter.php
   │        │  │  └─ TestDox
   │        │  │     └─ ResultPrinter.php
   │        │  ├─ ShellExitCodeCalculator.php
   │        │  ├─ TestRunner.php
   │        │  └─ TestSuiteFilterProcessor.php
   │        └─ Util
   │           ├─ Cloner.php
   │           ├─ Color.php
   │           ├─ Exception
   │           │  ├─ Exception.php
   │           │  ├─ InvalidDirectoryException.php
   │           │  ├─ InvalidJsonException.php
   │           │  ├─ InvalidVersionOperatorException.php
   │           │  ├─ PhpProcessException.php
   │           │  └─ XmlException.php
   │           ├─ ExcludeList.php
   │           ├─ Exporter.php
   │           ├─ Filesystem.php
   │           ├─ Filter.php
   │           ├─ GlobalState.php
   │           ├─ Http
   │           │  ├─ Downloader.php
   │           │  └─ PhpDownloader.php
   │           ├─ Json.php
   │           ├─ PHP
   │           │  ├─ AbstractPhpProcess.php
   │           │  ├─ DefaultPhpProcess.php
   │           │  └─ Template
   │           │     ├─ PhptTestCase.tpl
   │           │     ├─ TestCaseClass.tpl
   │           │     └─ TestCaseMethod.tpl
   │           ├─ Reflection.php
   │           ├─ Test.php
   │           ├─ ThrowableToStringMapper.php
   │           ├─ VersionComparisonOperator.php
   │           └─ Xml
   │              ├─ Loader.php
   │              └─ Xml.php
   ├─ psr
   │  ├─ container
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ ContainerExceptionInterface.php
   │  │     ├─ ContainerInterface.php
   │  │     └─ NotFoundExceptionInterface.php
   │  ├─ event-dispatcher
   │  │  ├─ .editorconfig
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ EventDispatcherInterface.php
   │  │     ├─ ListenerProviderInterface.php
   │  │     └─ StoppableEventInterface.php
   │  └─ log
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ composer.json
   │     └─ src
   │        ├─ AbstractLogger.php
   │        ├─ InvalidArgumentException.php
   │        ├─ LogLevel.php
   │        ├─ LoggerAwareInterface.php
   │        ├─ LoggerAwareTrait.php
   │        ├─ LoggerInterface.php
   │        ├─ LoggerTrait.php
   │        └─ NullLogger.php
   ├─ sebastian
   │  ├─ cli-parser
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ Parser.php
   │  │     └─ exceptions
   │  │        ├─ AmbiguousOptionException.php
   │  │        ├─ Exception.php
   │  │        ├─ OptionDoesNotAllowArgumentException.php
   │  │        ├─ RequiredOptionArgumentMissingException.php
   │  │        └─ UnknownOptionException.php
   │  ├─ code-unit
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ ClassMethodUnit.php
   │  │     ├─ ClassUnit.php
   │  │     ├─ CodeUnit.php
   │  │     ├─ CodeUnitCollection.php
   │  │     ├─ CodeUnitCollectionIterator.php
   │  │     ├─ FileUnit.php
   │  │     ├─ FunctionUnit.php
   │  │     ├─ InterfaceMethodUnit.php
   │  │     ├─ InterfaceUnit.php
   │  │     ├─ Mapper.php
   │  │     ├─ TraitMethodUnit.php
   │  │     ├─ TraitUnit.php
   │  │     └─ exceptions
   │  │        ├─ Exception.php
   │  │        ├─ InvalidCodeUnitException.php
   │  │        ├─ NoTraitException.php
   │  │        └─ ReflectionException.php
   │  ├─ code-unit-reverse-lookup
   │  │  ├─ .psalm
   │  │  │  ├─ baseline.xml
   │  │  │  └─ config.xml
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     └─ Wizard.php
   │  ├─ comparator
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ ArrayComparator.php
   │  │     ├─ Comparator.php
   │  │     ├─ ComparisonFailure.php
   │  │     ├─ DOMNodeComparator.php
   │  │     ├─ DateTimeComparator.php
   │  │     ├─ ExceptionComparator.php
   │  │     ├─ Factory.php
   │  │     ├─ MockObjectComparator.php
   │  │     ├─ NumericComparator.php
   │  │     ├─ ObjectComparator.php
   │  │     ├─ ResourceComparator.php
   │  │     ├─ ScalarComparator.php
   │  │     ├─ SplObjectStorageComparator.php
   │  │     ├─ TypeComparator.php
   │  │     └─ exceptions
   │  │        ├─ Exception.php
   │  │        └─ RuntimeException.php
   │  ├─ complexity
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ Calculator.php
   │  │     ├─ Complexity
   │  │     │  ├─ Complexity.php
   │  │     │  ├─ ComplexityCollection.php
   │  │     │  └─ ComplexityCollectionIterator.php
   │  │     ├─ Exception
   │  │     │  ├─ Exception.php
   │  │     │  └─ RuntimeException.php
   │  │     └─ Visitor
   │  │        ├─ ComplexityCalculatingVisitor.php
   │  │        └─ CyclomaticComplexityCalculatingVisitor.php
   │  ├─ diff
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ Chunk.php
   │  │     ├─ Diff.php
   │  │     ├─ Differ.php
   │  │     ├─ Exception
   │  │     │  ├─ ConfigurationException.php
   │  │     │  ├─ Exception.php
   │  │     │  └─ InvalidArgumentException.php
   │  │     ├─ Line.php
   │  │     ├─ LongestCommonSubsequenceCalculator.php
   │  │     ├─ MemoryEfficientLongestCommonSubsequenceCalculator.php
   │  │     ├─ Output
   │  │     │  ├─ AbstractChunkOutputBuilder.php
   │  │     │  ├─ DiffOnlyOutputBuilder.php
   │  │     │  ├─ DiffOutputBuilderInterface.php
   │  │     │  ├─ StrictUnifiedDiffOutputBuilder.php
   │  │     │  └─ UnifiedDiffOutputBuilder.php
   │  │     ├─ Parser.php
   │  │     └─ TimeEfficientLongestCommonSubsequenceCalculator.php
   │  ├─ environment
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ Console.php
   │  │     └─ Runtime.php
   │  ├─ exporter
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     └─ Exporter.php
   │  ├─ global-state
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ CodeExporter.php
   │  │     ├─ ExcludeList.php
   │  │     ├─ Restorer.php
   │  │     ├─ Snapshot.php
   │  │     └─ exceptions
   │  │        ├─ Exception.php
   │  │        └─ RuntimeException.php
   │  ├─ lines-of-code
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     ├─ Counter.php
   │  │     ├─ Exception
   │  │     │  ├─ Exception.php
   │  │     │  ├─ IllogicalValuesException.php
   │  │     │  ├─ NegativeValueException.php
   │  │     │  └─ RuntimeException.php
   │  │     ├─ LineCountingVisitor.php
   │  │     └─ LinesOfCode.php
   │  ├─ object-enumerator
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  ├─ phpunit.xml
   │  │  └─ src
   │  │     └─ Enumerator.php
   │  ├─ object-reflector
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     └─ ObjectReflector.php
   │  ├─ recursion-context
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  └─ src
   │  │     └─ Context.php
   │  ├─ type
   │  │  ├─ ChangeLog.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ SECURITY.md
   │  │  ├─ composer.json
   │  │  ├─ infection.json
   │  │  └─ src
   │  │     ├─ Parameter.php
   │  │     ├─ ReflectionMapper.php
   │  │     ├─ TypeName.php
   │  │     ├─ exception
   │  │     │  ├─ Exception.php
   │  │     │  └─ RuntimeException.php
   │  │     └─ type
   │  │        ├─ CallableType.php
   │  │        ├─ FalseType.php
   │  │        ├─ GenericObjectType.php
   │  │        ├─ IntersectionType.php
   │  │        ├─ IterableType.php
   │  │        ├─ MixedType.php
   │  │        ├─ NeverType.php
   │  │        ├─ NullType.php
   │  │        ├─ ObjectType.php
   │  │        ├─ SimpleType.php
   │  │        ├─ StaticType.php
   │  │        ├─ TrueType.php
   │  │        ├─ Type.php
   │  │        ├─ UnionType.php
   │  │        ├─ UnknownType.php
   │  │        └─ VoidType.php
   │  └─ version
   │     ├─ ChangeLog.md
   │     ├─ LICENSE
   │     ├─ README.md
   │     ├─ SECURITY.md
   │     ├─ composer.json
   │     └─ src
   │        └─ Version.php
   ├─ symfony
   │  ├─ config
   │  │  ├─ Builder
   │  │  │  ├─ ClassBuilder.php
   │  │  │  ├─ ConfigBuilderGenerator.php
   │  │  │  ├─ ConfigBuilderGeneratorInterface.php
   │  │  │  ├─ ConfigBuilderInterface.php
   │  │  │  ├─ Method.php
   │  │  │  └─ Property.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ ConfigCache.php
   │  │  ├─ ConfigCacheFactory.php
   │  │  ├─ ConfigCacheFactoryInterface.php
   │  │  ├─ ConfigCacheInterface.php
   │  │  ├─ Definition
   │  │  │  ├─ ArrayNode.php
   │  │  │  ├─ BaseNode.php
   │  │  │  ├─ BooleanNode.php
   │  │  │  ├─ Builder
   │  │  │  │  ├─ ArrayNodeDefinition.php
   │  │  │  │  ├─ BooleanNodeDefinition.php
   │  │  │  │  ├─ BuilderAwareInterface.php
   │  │  │  │  ├─ EnumNodeDefinition.php
   │  │  │  │  ├─ ExprBuilder.php
   │  │  │  │  ├─ FloatNodeDefinition.php
   │  │  │  │  ├─ IntegerNodeDefinition.php
   │  │  │  │  ├─ MergeBuilder.php
   │  │  │  │  ├─ NodeBuilder.php
   │  │  │  │  ├─ NodeDefinition.php
   │  │  │  │  ├─ NodeParentInterface.php
   │  │  │  │  ├─ NormalizationBuilder.php
   │  │  │  │  ├─ NumericNodeDefinition.php
   │  │  │  │  ├─ ParentNodeDefinitionInterface.php
   │  │  │  │  ├─ ScalarNodeDefinition.php
   │  │  │  │  ├─ TreeBuilder.php
   │  │  │  │  ├─ ValidationBuilder.php
   │  │  │  │  └─ VariableNodeDefinition.php
   │  │  │  ├─ ConfigurableInterface.php
   │  │  │  ├─ Configuration.php
   │  │  │  ├─ ConfigurationInterface.php
   │  │  │  ├─ Configurator
   │  │  │  │  └─ DefinitionConfigurator.php
   │  │  │  ├─ Dumper
   │  │  │  │  ├─ XmlReferenceDumper.php
   │  │  │  │  └─ YamlReferenceDumper.php
   │  │  │  ├─ EnumNode.php
   │  │  │  ├─ Exception
   │  │  │  │  ├─ DuplicateKeyException.php
   │  │  │  │  ├─ Exception.php
   │  │  │  │  ├─ ForbiddenOverwriteException.php
   │  │  │  │  ├─ InvalidConfigurationException.php
   │  │  │  │  ├─ InvalidDefinitionException.php
   │  │  │  │  ├─ InvalidTypeException.php
   │  │  │  │  └─ UnsetKeyException.php
   │  │  │  ├─ FloatNode.php
   │  │  │  ├─ IntegerNode.php
   │  │  │  ├─ Loader
   │  │  │  │  └─ DefinitionFileLoader.php
   │  │  │  ├─ NodeInterface.php
   │  │  │  ├─ NumericNode.php
   │  │  │  ├─ Processor.php
   │  │  │  ├─ PrototypeNodeInterface.php
   │  │  │  ├─ PrototypedArrayNode.php
   │  │  │  ├─ ScalarNode.php
   │  │  │  └─ VariableNode.php
   │  │  ├─ Exception
   │  │  │  ├─ FileLoaderImportCircularReferenceException.php
   │  │  │  ├─ FileLocatorFileNotFoundException.php
   │  │  │  └─ LoaderLoadException.php
   │  │  ├─ FileLocator.php
   │  │  ├─ FileLocatorInterface.php
   │  │  ├─ LICENSE
   │  │  ├─ Loader
   │  │  │  ├─ DelegatingLoader.php
   │  │  │  ├─ DirectoryAwareLoaderInterface.php
   │  │  │  ├─ FileLoader.php
   │  │  │  ├─ GlobFileLoader.php
   │  │  │  ├─ Loader.php
   │  │  │  ├─ LoaderInterface.php
   │  │  │  ├─ LoaderResolver.php
   │  │  │  ├─ LoaderResolverInterface.php
   │  │  │  └─ ParamConfigurator.php
   │  │  ├─ README.md
   │  │  ├─ Resource
   │  │  │  ├─ ClassExistenceResource.php
   │  │  │  ├─ ComposerResource.php
   │  │  │  ├─ DirectoryResource.php
   │  │  │  ├─ FileExistenceResource.php
   │  │  │  ├─ FileResource.php
   │  │  │  ├─ GlobResource.php
   │  │  │  ├─ ReflectionClassResource.php
   │  │  │  ├─ ResourceInterface.php
   │  │  │  ├─ SelfCheckingResourceChecker.php
   │  │  │  └─ SelfCheckingResourceInterface.php
   │  │  ├─ ResourceCheckerConfigCache.php
   │  │  ├─ ResourceCheckerConfigCacheFactory.php
   │  │  ├─ ResourceCheckerInterface.php
   │  │  ├─ Util
   │  │  │  ├─ Exception
   │  │  │  │  ├─ InvalidXmlException.php
   │  │  │  │  └─ XmlParsingException.php
   │  │  │  └─ XmlUtils.php
   │  │  └─ composer.json
   │  ├─ console
   │  │  ├─ Application.php
   │  │  ├─ Attribute
   │  │  │  └─ AsCommand.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ CI
   │  │  │  └─ GithubActionReporter.php
   │  │  ├─ Color.php
   │  │  ├─ Command
   │  │  │  ├─ Command.php
   │  │  │  ├─ CompleteCommand.php
   │  │  │  ├─ DumpCompletionCommand.php
   │  │  │  ├─ HelpCommand.php
   │  │  │  ├─ LazyCommand.php
   │  │  │  ├─ ListCommand.php
   │  │  │  ├─ LockableTrait.php
   │  │  │  ├─ SignalableCommandInterface.php
   │  │  │  └─ TraceableCommand.php
   │  │  ├─ CommandLoader
   │  │  │  ├─ CommandLoaderInterface.php
   │  │  │  ├─ ContainerCommandLoader.php
   │  │  │  └─ FactoryCommandLoader.php
   │  │  ├─ Completion
   │  │  │  ├─ CompletionInput.php
   │  │  │  ├─ CompletionSuggestions.php
   │  │  │  ├─ Output
   │  │  │  │  ├─ BashCompletionOutput.php
   │  │  │  │  ├─ CompletionOutputInterface.php
   │  │  │  │  ├─ FishCompletionOutput.php
   │  │  │  │  └─ ZshCompletionOutput.php
   │  │  │  └─ Suggestion.php
   │  │  ├─ ConsoleEvents.php
   │  │  ├─ Cursor.php
   │  │  ├─ DataCollector
   │  │  │  └─ CommandDataCollector.php
   │  │  ├─ Debug
   │  │  │  └─ CliRequest.php
   │  │  ├─ DependencyInjection
   │  │  │  └─ AddConsoleCommandPass.php
   │  │  ├─ Descriptor
   │  │  │  ├─ ApplicationDescription.php
   │  │  │  ├─ Descriptor.php
   │  │  │  ├─ DescriptorInterface.php
   │  │  │  ├─ JsonDescriptor.php
   │  │  │  ├─ MarkdownDescriptor.php
   │  │  │  ├─ ReStructuredTextDescriptor.php
   │  │  │  ├─ TextDescriptor.php
   │  │  │  └─ XmlDescriptor.php
   │  │  ├─ Event
   │  │  │  ├─ ConsoleCommandEvent.php
   │  │  │  ├─ ConsoleErrorEvent.php
   │  │  │  ├─ ConsoleEvent.php
   │  │  │  ├─ ConsoleSignalEvent.php
   │  │  │  └─ ConsoleTerminateEvent.php
   │  │  ├─ EventListener
   │  │  │  └─ ErrorListener.php
   │  │  ├─ Exception
   │  │  │  ├─ CommandNotFoundException.php
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  ├─ InvalidOptionException.php
   │  │  │  ├─ LogicException.php
   │  │  │  ├─ MissingInputException.php
   │  │  │  ├─ NamespaceNotFoundException.php
   │  │  │  ├─ RunCommandFailedException.php
   │  │  │  └─ RuntimeException.php
   │  │  ├─ Formatter
   │  │  │  ├─ NullOutputFormatter.php
   │  │  │  ├─ NullOutputFormatterStyle.php
   │  │  │  ├─ OutputFormatter.php
   │  │  │  ├─ OutputFormatterInterface.php
   │  │  │  ├─ OutputFormatterStyle.php
   │  │  │  ├─ OutputFormatterStyleInterface.php
   │  │  │  ├─ OutputFormatterStyleStack.php
   │  │  │  └─ WrappableOutputFormatterInterface.php
   │  │  ├─ Helper
   │  │  │  ├─ DebugFormatterHelper.php
   │  │  │  ├─ DescriptorHelper.php
   │  │  │  ├─ Dumper.php
   │  │  │  ├─ FormatterHelper.php
   │  │  │  ├─ Helper.php
   │  │  │  ├─ HelperInterface.php
   │  │  │  ├─ HelperSet.php
   │  │  │  ├─ InputAwareHelper.php
   │  │  │  ├─ OutputWrapper.php
   │  │  │  ├─ ProcessHelper.php
   │  │  │  ├─ ProgressBar.php
   │  │  │  ├─ ProgressIndicator.php
   │  │  │  ├─ QuestionHelper.php
   │  │  │  ├─ SymfonyQuestionHelper.php
   │  │  │  ├─ Table.php
   │  │  │  ├─ TableCell.php
   │  │  │  ├─ TableCellStyle.php
   │  │  │  ├─ TableRows.php
   │  │  │  ├─ TableSeparator.php
   │  │  │  └─ TableStyle.php
   │  │  ├─ Input
   │  │  │  ├─ ArgvInput.php
   │  │  │  ├─ ArrayInput.php
   │  │  │  ├─ Input.php
   │  │  │  ├─ InputArgument.php
   │  │  │  ├─ InputAwareInterface.php
   │  │  │  ├─ InputDefinition.php
   │  │  │  ├─ InputInterface.php
   │  │  │  ├─ InputOption.php
   │  │  │  ├─ StreamableInputInterface.php
   │  │  │  └─ StringInput.php
   │  │  ├─ LICENSE
   │  │  ├─ Logger
   │  │  │  └─ ConsoleLogger.php
   │  │  ├─ Messenger
   │  │  │  ├─ RunCommandContext.php
   │  │  │  ├─ RunCommandMessage.php
   │  │  │  └─ RunCommandMessageHandler.php
   │  │  ├─ Output
   │  │  │  ├─ AnsiColorMode.php
   │  │  │  ├─ BufferedOutput.php
   │  │  │  ├─ ConsoleOutput.php
   │  │  │  ├─ ConsoleOutputInterface.php
   │  │  │  ├─ ConsoleSectionOutput.php
   │  │  │  ├─ NullOutput.php
   │  │  │  ├─ Output.php
   │  │  │  ├─ OutputInterface.php
   │  │  │  ├─ StreamOutput.php
   │  │  │  └─ TrimmedBufferOutput.php
   │  │  ├─ Question
   │  │  │  ├─ ChoiceQuestion.php
   │  │  │  ├─ ConfirmationQuestion.php
   │  │  │  └─ Question.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  ├─ bin
   │  │  │  │  └─ hiddeninput.exe
   │  │  │  ├─ completion.bash
   │  │  │  ├─ completion.fish
   │  │  │  └─ completion.zsh
   │  │  ├─ SignalRegistry
   │  │  │  ├─ SignalMap.php
   │  │  │  └─ SignalRegistry.php
   │  │  ├─ SingleCommandApplication.php
   │  │  ├─ Style
   │  │  │  ├─ OutputStyle.php
   │  │  │  ├─ StyleInterface.php
   │  │  │  └─ SymfonyStyle.php
   │  │  ├─ Terminal.php
   │  │  ├─ Tester
   │  │  │  ├─ ApplicationTester.php
   │  │  │  ├─ CommandCompletionTester.php
   │  │  │  ├─ CommandTester.php
   │  │  │  ├─ Constraint
   │  │  │  │  └─ CommandIsSuccessful.php
   │  │  │  └─ TesterTrait.php
   │  │  └─ composer.json
   │  ├─ dependency-injection
   │  │  ├─ Alias.php
   │  │  ├─ Argument
   │  │  │  ├─ AbstractArgument.php
   │  │  │  ├─ ArgumentInterface.php
   │  │  │  ├─ BoundArgument.php
   │  │  │  ├─ IteratorArgument.php
   │  │  │  ├─ LazyClosure.php
   │  │  │  ├─ ReferenceSetArgumentTrait.php
   │  │  │  ├─ RewindableGenerator.php
   │  │  │  ├─ ServiceClosureArgument.php
   │  │  │  ├─ ServiceLocator.php
   │  │  │  ├─ ServiceLocatorArgument.php
   │  │  │  └─ TaggedIteratorArgument.php
   │  │  ├─ Attribute
   │  │  │  ├─ AsAlias.php
   │  │  │  ├─ AsDecorator.php
   │  │  │  ├─ AsTaggedItem.php
   │  │  │  ├─ Autoconfigure.php
   │  │  │  ├─ AutoconfigureTag.php
   │  │  │  ├─ Autowire.php
   │  │  │  ├─ AutowireCallable.php
   │  │  │  ├─ AutowireDecorated.php
   │  │  │  ├─ AutowireIterator.php
   │  │  │  ├─ AutowireLocator.php
   │  │  │  ├─ AutowireServiceClosure.php
   │  │  │  ├─ Exclude.php
   │  │  │  ├─ MapDecorated.php
   │  │  │  ├─ TaggedIterator.php
   │  │  │  ├─ TaggedLocator.php
   │  │  │  ├─ Target.php
   │  │  │  └─ When.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ ChildDefinition.php
   │  │  ├─ Compiler
   │  │  │  ├─ AbstractRecursivePass.php
   │  │  │  ├─ AliasDeprecatedPublicServicesPass.php
   │  │  │  ├─ AnalyzeServiceReferencesPass.php
   │  │  │  ├─ AttributeAutoconfigurationPass.php
   │  │  │  ├─ AutoAliasServicePass.php
   │  │  │  ├─ AutowireAsDecoratorPass.php
   │  │  │  ├─ AutowirePass.php
   │  │  │  ├─ AutowireRequiredMethodsPass.php
   │  │  │  ├─ AutowireRequiredPropertiesPass.php
   │  │  │  ├─ CheckArgumentsValidityPass.php
   │  │  │  ├─ CheckCircularReferencesPass.php
   │  │  │  ├─ CheckDefinitionValidityPass.php
   │  │  │  ├─ CheckExceptionOnInvalidReferenceBehaviorPass.php
   │  │  │  ├─ CheckReferenceValidityPass.php
   │  │  │  ├─ CheckTypeDeclarationsPass.php
   │  │  │  ├─ Compiler.php
   │  │  │  ├─ CompilerPassInterface.php
   │  │  │  ├─ DecoratorServicePass.php
   │  │  │  ├─ DefinitionErrorExceptionPass.php
   │  │  │  ├─ ExtensionCompilerPass.php
   │  │  │  ├─ InlineServiceDefinitionsPass.php
   │  │  │  ├─ MergeExtensionConfigurationPass.php
   │  │  │  ├─ PassConfig.php
   │  │  │  ├─ PriorityTaggedServiceTrait.php
   │  │  │  ├─ RegisterAutoconfigureAttributesPass.php
   │  │  │  ├─ RegisterEnvVarProcessorsPass.php
   │  │  │  ├─ RegisterReverseContainerPass.php
   │  │  │  ├─ RegisterServiceSubscribersPass.php
   │  │  │  ├─ RemoveAbstractDefinitionsPass.php
   │  │  │  ├─ RemoveBuildParametersPass.php
   │  │  │  ├─ RemovePrivateAliasesPass.php
   │  │  │  ├─ RemoveUnusedDefinitionsPass.php
   │  │  │  ├─ ReplaceAliasByActualDefinitionPass.php
   │  │  │  ├─ ResolveBindingsPass.php
   │  │  │  ├─ ResolveChildDefinitionsPass.php
   │  │  │  ├─ ResolveClassPass.php
   │  │  │  ├─ ResolveDecoratorStackPass.php
   │  │  │  ├─ ResolveEnvPlaceholdersPass.php
   │  │  │  ├─ ResolveFactoryClassPass.php
   │  │  │  ├─ ResolveHotPathPass.php
   │  │  │  ├─ ResolveInstanceofConditionalsPass.php
   │  │  │  ├─ ResolveInvalidReferencesPass.php
   │  │  │  ├─ ResolveNamedArgumentsPass.php
   │  │  │  ├─ ResolveNoPreloadPass.php
   │  │  │  ├─ ResolveParameterPlaceHoldersPass.php
   │  │  │  ├─ ResolveReferencesToAliasesPass.php
   │  │  │  ├─ ResolveServiceSubscribersPass.php
   │  │  │  ├─ ResolveTaggedIteratorArgumentPass.php
   │  │  │  ├─ ServiceLocatorTagPass.php
   │  │  │  ├─ ServiceReferenceGraph.php
   │  │  │  ├─ ServiceReferenceGraphEdge.php
   │  │  │  ├─ ServiceReferenceGraphNode.php
   │  │  │  └─ ValidateEnvPlaceholdersPass.php
   │  │  ├─ Config
   │  │  │  ├─ ContainerParametersResource.php
   │  │  │  └─ ContainerParametersResourceChecker.php
   │  │  ├─ Container.php
   │  │  ├─ ContainerAwareInterface.php
   │  │  ├─ ContainerAwareTrait.php
   │  │  ├─ ContainerBuilder.php
   │  │  ├─ ContainerInterface.php
   │  │  ├─ Definition.php
   │  │  ├─ Dumper
   │  │  │  ├─ Dumper.php
   │  │  │  ├─ DumperInterface.php
   │  │  │  ├─ GraphvizDumper.php
   │  │  │  ├─ PhpDumper.php
   │  │  │  ├─ Preloader.php
   │  │  │  ├─ XmlDumper.php
   │  │  │  └─ YamlDumper.php
   │  │  ├─ EnvVarLoaderInterface.php
   │  │  ├─ EnvVarProcessor.php
   │  │  ├─ EnvVarProcessorInterface.php
   │  │  ├─ Exception
   │  │  │  ├─ AutowiringFailedException.php
   │  │  │  ├─ BadMethodCallException.php
   │  │  │  ├─ EnvNotFoundException.php
   │  │  │  ├─ EnvParameterException.php
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  ├─ InvalidParameterTypeException.php
   │  │  │  ├─ LogicException.php
   │  │  │  ├─ OutOfBoundsException.php
   │  │  │  ├─ ParameterCircularReferenceException.php
   │  │  │  ├─ ParameterNotFoundException.php
   │  │  │  ├─ RuntimeException.php
   │  │  │  ├─ ServiceCircularReferenceException.php
   │  │  │  └─ ServiceNotFoundException.php
   │  │  ├─ ExpressionLanguage.php
   │  │  ├─ ExpressionLanguageProvider.php
   │  │  ├─ Extension
   │  │  │  ├─ AbstractExtension.php
   │  │  │  ├─ ConfigurableExtensionInterface.php
   │  │  │  ├─ ConfigurationExtensionInterface.php
   │  │  │  ├─ Extension.php
   │  │  │  ├─ ExtensionInterface.php
   │  │  │  ├─ ExtensionTrait.php
   │  │  │  └─ PrependExtensionInterface.php
   │  │  ├─ LICENSE
   │  │  ├─ LazyProxy
   │  │  │  ├─ Instantiator
   │  │  │  │  ├─ InstantiatorInterface.php
   │  │  │  │  ├─ LazyServiceInstantiator.php
   │  │  │  │  └─ RealServiceInstantiator.php
   │  │  │  ├─ PhpDumper
   │  │  │  │  ├─ DumperInterface.php
   │  │  │  │  ├─ LazyServiceDumper.php
   │  │  │  │  └─ NullDumper.php
   │  │  │  └─ ProxyHelper.php
   │  │  ├─ Loader
   │  │  │  ├─ ClosureLoader.php
   │  │  │  ├─ Configurator
   │  │  │  │  ├─ AbstractConfigurator.php
   │  │  │  │  ├─ AbstractServiceConfigurator.php
   │  │  │  │  ├─ AliasConfigurator.php
   │  │  │  │  ├─ ClosureReferenceConfigurator.php
   │  │  │  │  ├─ ContainerConfigurator.php
   │  │  │  │  ├─ DefaultsConfigurator.php
   │  │  │  │  ├─ EnvConfigurator.php
   │  │  │  │  ├─ FromCallableConfigurator.php
   │  │  │  │  ├─ InlineServiceConfigurator.php
   │  │  │  │  ├─ InstanceofConfigurator.php
   │  │  │  │  ├─ ParametersConfigurator.php
   │  │  │  │  ├─ PrototypeConfigurator.php
   │  │  │  │  ├─ ReferenceConfigurator.php
   │  │  │  │  ├─ ServiceConfigurator.php
   │  │  │  │  ├─ ServicesConfigurator.php
   │  │  │  │  └─ Traits
   │  │  │  │     ├─ AbstractTrait.php
   │  │  │  │     ├─ ArgumentTrait.php
   │  │  │  │     ├─ AutoconfigureTrait.php
   │  │  │  │     ├─ AutowireTrait.php
   │  │  │  │     ├─ BindTrait.php
   │  │  │  │     ├─ CallTrait.php
   │  │  │  │     ├─ ClassTrait.php
   │  │  │  │     ├─ ConfiguratorTrait.php
   │  │  │  │     ├─ ConstructorTrait.php
   │  │  │  │     ├─ DecorateTrait.php
   │  │  │  │     ├─ DeprecateTrait.php
   │  │  │  │     ├─ FactoryTrait.php
   │  │  │  │     ├─ FileTrait.php
   │  │  │  │     ├─ FromCallableTrait.php
   │  │  │  │     ├─ LazyTrait.php
   │  │  │  │     ├─ ParentTrait.php
   │  │  │  │     ├─ PropertyTrait.php
   │  │  │  │     ├─ PublicTrait.php
   │  │  │  │     ├─ ShareTrait.php
   │  │  │  │     ├─ SyntheticTrait.php
   │  │  │  │     └─ TagTrait.php
   │  │  │  ├─ DirectoryLoader.php
   │  │  │  ├─ FileLoader.php
   │  │  │  ├─ GlobFileLoader.php
   │  │  │  ├─ IniFileLoader.php
   │  │  │  ├─ PhpFileLoader.php
   │  │  │  ├─ XmlFileLoader.php
   │  │  │  ├─ YamlFileLoader.php
   │  │  │  └─ schema
   │  │  │     └─ dic
   │  │  │        └─ services
   │  │  │           └─ services-1.0.xsd
   │  │  ├─ Parameter.php
   │  │  ├─ ParameterBag
   │  │  │  ├─ ContainerBag.php
   │  │  │  ├─ ContainerBagInterface.php
   │  │  │  ├─ EnvPlaceholderParameterBag.php
   │  │  │  ├─ FrozenParameterBag.php
   │  │  │  ├─ ParameterBag.php
   │  │  │  └─ ParameterBagInterface.php
   │  │  ├─ README.md
   │  │  ├─ Reference.php
   │  │  ├─ ReverseContainer.php
   │  │  ├─ ServiceLocator.php
   │  │  ├─ TaggedContainerInterface.php
   │  │  ├─ TypedReference.php
   │  │  ├─ Variable.php
   │  │  └─ composer.json
   │  ├─ deprecation-contracts
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ composer.json
   │  │  └─ function.php
   │  ├─ event-dispatcher
   │  │  ├─ Attribute
   │  │  │  └─ AsEventListener.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Debug
   │  │  │  ├─ TraceableEventDispatcher.php
   │  │  │  └─ WrappedListener.php
   │  │  ├─ DependencyInjection
   │  │  │  ├─ AddEventAliasesPass.php
   │  │  │  └─ RegisterListenersPass.php
   │  │  ├─ EventDispatcher.php
   │  │  ├─ EventDispatcherInterface.php
   │  │  ├─ EventSubscriberInterface.php
   │  │  ├─ GenericEvent.php
   │  │  ├─ ImmutableEventDispatcher.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ composer.json
   │  ├─ event-dispatcher-contracts
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Event.php
   │  │  ├─ EventDispatcherInterface.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  └─ composer.json
   │  ├─ filesystem
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Exception
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ FileNotFoundException.php
   │  │  │  ├─ IOException.php
   │  │  │  ├─ IOExceptionInterface.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  └─ RuntimeException.php
   │  │  ├─ Filesystem.php
   │  │  ├─ LICENSE
   │  │  ├─ Path.php
   │  │  ├─ README.md
   │  │  └─ composer.json
   │  ├─ polyfill-ctype
   │  │  ├─ Ctype.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ bootstrap.php
   │  │  ├─ bootstrap80.php
   │  │  └─ composer.json
   │  ├─ polyfill-intl-grapheme
   │  │  ├─ Grapheme.php
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ bootstrap.php
   │  │  ├─ bootstrap80.php
   │  │  └─ composer.json
   │  ├─ polyfill-intl-normalizer
   │  │  ├─ LICENSE
   │  │  ├─ Normalizer.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  ├─ stubs
   │  │  │  │  └─ Normalizer.php
   │  │  │  └─ unidata
   │  │  │     ├─ canonicalComposition.php
   │  │  │     ├─ canonicalDecomposition.php
   │  │  │     ├─ combiningClass.php
   │  │  │     └─ compatibilityDecomposition.php
   │  │  ├─ bootstrap.php
   │  │  ├─ bootstrap80.php
   │  │  └─ composer.json
   │  ├─ polyfill-mbstring
   │  │  ├─ LICENSE
   │  │  ├─ Mbstring.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  └─ unidata
   │  │  │     ├─ caseFolding.php
   │  │  │     ├─ lowerCase.php
   │  │  │     ├─ titleCaseRegexp.php
   │  │  │     └─ upperCase.php
   │  │  ├─ bootstrap.php
   │  │  ├─ bootstrap80.php
   │  │  └─ composer.json
   │  ├─ service-contracts
   │  │  ├─ Attribute
   │  │  │  ├─ Required.php
   │  │  │  └─ SubscribedService.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ README.md
   │  │  ├─ ResetInterface.php
   │  │  ├─ ServiceCollectionInterface.php
   │  │  ├─ ServiceLocatorTrait.php
   │  │  ├─ ServiceMethodsSubscriberTrait.php
   │  │  ├─ ServiceProviderInterface.php
   │  │  ├─ ServiceSubscriberInterface.php
   │  │  ├─ ServiceSubscriberTrait.php
   │  │  ├─ Test
   │  │  │  ├─ ServiceLocatorTest.php
   │  │  │  └─ ServiceLocatorTestCase.php
   │  │  └─ composer.json
   │  ├─ string
   │  │  ├─ AbstractString.php
   │  │  ├─ AbstractUnicodeString.php
   │  │  ├─ ByteString.php
   │  │  ├─ CHANGELOG.md
   │  │  ├─ CodePointString.php
   │  │  ├─ Exception
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  └─ RuntimeException.php
   │  │  ├─ Inflector
   │  │  │  ├─ EnglishInflector.php
   │  │  │  ├─ FrenchInflector.php
   │  │  │  └─ InflectorInterface.php
   │  │  ├─ LICENSE
   │  │  ├─ LazyString.php
   │  │  ├─ README.md
   │  │  ├─ Resources
   │  │  │  ├─ bin
   │  │  │  ├─ data
   │  │  │  │  ├─ wcswidth_table_wide.php
   │  │  │  │  └─ wcswidth_table_zero.php
   │  │  │  └─ functions.php
   │  │  ├─ Slugger
   │  │  │  ├─ AsciiSlugger.php
   │  │  │  └─ SluggerInterface.php
   │  │  ├─ UnicodeString.php
   │  │  └─ composer.json
   │  ├─ translation
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Catalogue
   │  │  │  ├─ AbstractOperation.php
   │  │  │  ├─ MergeOperation.php
   │  │  │  ├─ OperationInterface.php
   │  │  │  └─ TargetOperation.php
   │  │  ├─ CatalogueMetadataAwareInterface.php
   │  │  ├─ Command
   │  │  │  ├─ TranslationPullCommand.php
   │  │  │  ├─ TranslationPushCommand.php
   │  │  │  ├─ TranslationTrait.php
   │  │  │  └─ XliffLintCommand.php
   │  │  ├─ DataCollector
   │  │  │  └─ TranslationDataCollector.php
   │  │  ├─ DataCollectorTranslator.php
   │  │  ├─ DependencyInjection
   │  │  │  ├─ DataCollectorTranslatorPass.php
   │  │  │  ├─ LoggingTranslatorPass.php
   │  │  │  ├─ TranslationDumperPass.php
   │  │  │  ├─ TranslationExtractorPass.php
   │  │  │  ├─ TranslatorPass.php
   │  │  │  └─ TranslatorPathsPass.php
   │  │  ├─ Dumper
   │  │  │  ├─ CsvFileDumper.php
   │  │  │  ├─ DumperInterface.php
   │  │  │  ├─ FileDumper.php
   │  │  │  ├─ IcuResFileDumper.php
   │  │  │  ├─ IniFileDumper.php
   │  │  │  ├─ JsonFileDumper.php
   │  │  │  ├─ MoFileDumper.php
   │  │  │  ├─ PhpFileDumper.php
   │  │  │  ├─ PoFileDumper.php
   │  │  │  ├─ QtFileDumper.php
   │  │  │  ├─ XliffFileDumper.php
   │  │  │  └─ YamlFileDumper.php
   │  │  ├─ Exception
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ IncompleteDsnException.php
   │  │  │  ├─ InvalidArgumentException.php
   │  │  │  ├─ InvalidResourceException.php
   │  │  │  ├─ LogicException.php
   │  │  │  ├─ MissingRequiredOptionException.php
   │  │  │  ├─ NotFoundResourceException.php
   │  │  │  ├─ ProviderException.php
   │  │  │  ├─ ProviderExceptionInterface.php
   │  │  │  ├─ RuntimeException.php
   │  │  │  └─ UnsupportedSchemeException.php
   │  │  ├─ Extractor
   │  │  │  ├─ AbstractFileExtractor.php
   │  │  │  ├─ ChainExtractor.php
   │  │  │  ├─ ExtractorInterface.php
   │  │  │  ├─ PhpAstExtractor.php
   │  │  │  ├─ PhpExtractor.php
   │  │  │  ├─ PhpStringTokenParser.php
   │  │  │  └─ Visitor
   │  │  │     ├─ AbstractVisitor.php
   │  │  │     ├─ ConstraintVisitor.php
   │  │  │     ├─ TransMethodVisitor.php
   │  │  │     └─ TranslatableMessageVisitor.php
   │  │  ├─ Formatter
   │  │  │  ├─ IntlFormatter.php
   │  │  │  ├─ IntlFormatterInterface.php
   │  │  │  ├─ MessageFormatter.php
   │  │  │  └─ MessageFormatterInterface.php
   │  │  ├─ IdentityTranslator.php
   │  │  ├─ LICENSE
   │  │  ├─ Loader
   │  │  │  ├─ ArrayLoader.php
   │  │  │  ├─ CsvFileLoader.php
   │  │  │  ├─ FileLoader.php
   │  │  │  ├─ IcuDatFileLoader.php
   │  │  │  ├─ IcuResFileLoader.php
   │  │  │  ├─ IniFileLoader.php
   │  │  │  ├─ JsonFileLoader.php
   │  │  │  ├─ LoaderInterface.php
   │  │  │  ├─ MoFileLoader.php
   │  │  │  ├─ PhpFileLoader.php
   │  │  │  ├─ PoFileLoader.php
   │  │  │  ├─ QtFileLoader.php
   │  │  │  ├─ XliffFileLoader.php
   │  │  │  └─ YamlFileLoader.php
   │  │  ├─ LocaleSwitcher.php
   │  │  ├─ LoggingTranslator.php
   │  │  ├─ MessageCatalogue.php
   │  │  ├─ MessageCatalogueInterface.php
   │  │  ├─ MetadataAwareInterface.php
   │  │  ├─ Provider
   │  │  │  ├─ AbstractProviderFactory.php
   │  │  │  ├─ Dsn.php
   │  │  │  ├─ FilteringProvider.php
   │  │  │  ├─ NullProvider.php
   │  │  │  ├─ NullProviderFactory.php
   │  │  │  ├─ ProviderFactoryInterface.php
   │  │  │  ├─ ProviderInterface.php
   │  │  │  ├─ TranslationProviderCollection.php
   │  │  │  └─ TranslationProviderCollectionFactory.php
   │  │  ├─ PseudoLocalizationTranslator.php
   │  │  ├─ README.md
   │  │  ├─ Reader
   │  │  │  ├─ TranslationReader.php
   │  │  │  └─ TranslationReaderInterface.php
   │  │  ├─ Resources
   │  │  │  ├─ bin
   │  │  │  │  └─ translation-status.php
   │  │  │  ├─ data
   │  │  │  │  └─ parents.json
   │  │  │  ├─ functions.php
   │  │  │  └─ schemas
   │  │  │     ├─ xliff-core-1.2-transitional.xsd
   │  │  │     ├─ xliff-core-2.0.xsd
   │  │  │     └─ xml.xsd
   │  │  ├─ Test
   │  │  │  ├─ ProviderFactoryTestCase.php
   │  │  │  └─ ProviderTestCase.php
   │  │  ├─ TranslatableMessage.php
   │  │  ├─ Translator.php
   │  │  ├─ TranslatorBag.php
   │  │  ├─ TranslatorBagInterface.php
   │  │  ├─ Util
   │  │  │  ├─ ArrayConverter.php
   │  │  │  └─ XliffUtils.php
   │  │  ├─ Writer
   │  │  │  ├─ TranslationWriter.php
   │  │  │  └─ TranslationWriterInterface.php
   │  │  └─ composer.json
   │  ├─ translation-contracts
   │  │  ├─ CHANGELOG.md
   │  │  ├─ LICENSE
   │  │  ├─ LocaleAwareInterface.php
   │  │  ├─ README.md
   │  │  ├─ Test
   │  │  │  └─ TranslatorTest.php
   │  │  ├─ TranslatableInterface.php
   │  │  ├─ TranslatorInterface.php
   │  │  ├─ TranslatorTrait.php
   │  │  └─ composer.json
   │  ├─ var-exporter
   │  │  ├─ CHANGELOG.md
   │  │  ├─ Exception
   │  │  │  ├─ ClassNotFoundException.php
   │  │  │  ├─ ExceptionInterface.php
   │  │  │  ├─ LogicException.php
   │  │  │  └─ NotInstantiableTypeException.php
   │  │  ├─ Hydrator.php
   │  │  ├─ Instantiator.php
   │  │  ├─ Internal
   │  │  │  ├─ Exporter.php
   │  │  │  ├─ Hydrator.php
   │  │  │  ├─ LazyObjectRegistry.php
   │  │  │  ├─ LazyObjectState.php
   │  │  │  ├─ LazyObjectTrait.php
   │  │  │  ├─ Reference.php
   │  │  │  ├─ Registry.php
   │  │  │  └─ Values.php
   │  │  ├─ LICENSE
   │  │  ├─ LazyGhostTrait.php
   │  │  ├─ LazyObjectInterface.php
   │  │  ├─ LazyProxyTrait.php
   │  │  ├─ ProxyHelper.php
   │  │  ├─ README.md
   │  │  ├─ VarExporter.php
   │  │  └─ composer.json
   │  └─ yaml
   │     ├─ CHANGELOG.md
   │     ├─ Command
   │     │  └─ LintCommand.php
   │     ├─ Dumper.php
   │     ├─ Escaper.php
   │     ├─ Exception
   │     │  ├─ DumpException.php
   │     │  ├─ ExceptionInterface.php
   │     │  ├─ ParseException.php
   │     │  └─ RuntimeException.php
   │     ├─ Inline.php
   │     ├─ LICENSE
   │     ├─ Parser.php
   │     ├─ README.md
   │     ├─ Resources
   │     │  └─ bin
   │     │     └─ yaml-lint
   │     ├─ Tag
   │     │  └─ TaggedValue.php
   │     ├─ Unescaper.php
   │     ├─ Yaml.php
   │     └─ composer.json
   └─ theseer
      └─ tokenizer
         ├─ CHANGELOG.md
         ├─ LICENSE
         ├─ README.md
         ├─ composer.json
         └─ src
            ├─ Exception.php
            ├─ NamespaceUri.php
            ├─ NamespaceUriException.php
            ├─ Token.php
            ├─ TokenCollection.php
            ├─ TokenCollectionException.php
            ├─ Tokenizer.php
            └─ XMLSerializer.php

```