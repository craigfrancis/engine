<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'templado\\engine\\csrfprotection' => '/csrfprotection/CSRFProtection.php',
                'templado\\engine\\csrfprotectionrenderer' => '/csrfprotection/CSRFProtectionRenderer.php',
                'templado\\engine\\cssselector' => '/selectors/CSSSelector.php',
                'templado\\engine\\document' => '/Document.php',
                'templado\\engine\\documentcollection' => '/DocumentCollection.php',
                'templado\\engine\\filename' => '/Filename.php',
                'templado\\engine\\filereader' => '/FileReader.php',
                'templado\\engine\\filewriter' => '/FileWriter.php',
                'templado\\engine\\formdata' => '/formdata/FormData.php',
                'templado\\engine\\formdataexception' => '/formdata/FormDataException.php',
                'templado\\engine\\formdatarenderer' => '/formdata/FormDataRenderer.php',
                'templado\\engine\\formdatarendererexception' => '/formdata/FormDataRendererException.php',
                'templado\\engine\\id' => '/Id.php',
                'templado\\engine\\mergelist' => '/MergeList.php',
                'templado\\engine\\merger' => '/Merger.php',
                'templado\\engine\\selection' => '/Selection.php',
                'templado\\engine\\selector' => '/Selector.php',
                'templado\\engine\\serializer' => '/Serializer.php',
                'templado\\engine\\snapshotattributelist' => '/viewmodel/SnapshotAttributeList.php',
                'templado\\engine\\snapshotattributelistexception' => '/viewmodel/SnapshotAttributeListException.php',
                'templado\\engine\\snapshotdomnodelist' => '/viewmodel/SnapshotDOMNodelist.php',
                'templado\\engine\\snapshotdomnodelistexception' => '/viewmodel/SnapshotDOMNodelistException.php',
                'templado\\engine\\striprdfaattributestransformation' => '/transformation/StripRDFaAttributesTransformation.php',
                'templado\\engine\\templadoexception' => '/TempladoException.php',
                'templado\\engine\\templadoparsingexception' => '/TempladoParsingException.php',
                'templado\\engine\\transformation' => '/Transformation.php',
                'templado\\engine\\transformationprocessor' => '/transformation/TransformationProcessor.php',
                'templado\\engine\\viewmodelrenderer' => '/viewmodel/ViewModelRenderer.php',
                'templado\\engine\\viewmodelrendererexception' => '/viewmodel/ViewModelRendererException.php',
                'templado\\engine\\xpathselector' => '/selectors/XPathSelector.php',
                'templado\\engine\\xpathselectorexception' => '/selectors/XPathSelectorException.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    true
);
// @codeCoverageIgnoreEnd
