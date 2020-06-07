<?php

namespace helpers;

/**
 * Class JsLoaderClass
 */
class JsLoaderClass
{
    /**
     * @param int $caseType
     * @param int $caseCategory
     * @param int $caseOrder
     * @param int $casePage
     * @param int $caseCount
     */
    public static function buildLoadCasesScript($caseType = 0, $caseCategory = 0, $caseOrder = 0, $casePage = 0,  $caseCount = 9)
    {
        $js = "
            <script>
            $(document).ready(function() {
              loadCases($caseType, $caseCategory, $caseOrder, $casePage, $caseCount);
            })
            
            $('.core-category').click(function() {
              let categoryId = $(this).attr('data-id');
              loadCases($caseType, categoryId, $caseOrder, $casePage, $caseCount);
            })
            </script>
        ";

        return $js;
    }
}
