<?php  defined('C5_EXECUTE') or die('Access Denied.');

$topics = $topics ?? [];
$title = $title ?? t('Topics');
$titleFormat = $titleFormat ?? 'h5';
$mode = $mode ?? 'S';
$tree = $tree ?? null;
/** @var \Concrete\Block\TopicList\Controller $controller */
?>
<div>
    <?php
    if ($mode == 'S' && is_object($tree)) {
        $node = $tree->getRootTreeNodeObject();
        $node->populateChildren();
        if (is_object($node)) {
            if (!isset($selectedTopicID)) {
                $selectedTopicID = null;
            }
            ?><ul class="list-group"><?php
            $walk = function ($node) use (&$walk, &$controller, $selectedTopicID) {
                foreach ($node->getChildNodes() as $topic) {
                    if ($topic instanceof \Concrete\Core\Tree\Node\Type\Category) {
                        ?>
                        <?php
                    } else {
                        ?><li class="list-group-item"><a href="<?php echo $controller->getTopicLink($topic); ?>" <?php
                        if (isset($selectedTopicID) && $selectedTopicID == $topic->getTreeNodeID()) {
                            ?> <?php
                        }
                        ?>><?php echo $topic->getTreeNodeDisplayName(); ?></a><?php
                    }
                    if (count($topic->getChildNodes())) {
                        $walk($topic);
                    } ?>
                    <?php
                }
            };
            $walk($node);
            ?></ul><?php
        }
    }

    if ($mode == 'P') {
        if (isset($topics) && count($topics)) {
            ?><ul class="ccm-block-topic-list-page-topics"><?php
            foreach ($topics as $topic) {
                ?><li><a href="<?php echo $controller->getTopicLink($topic); ?>"><?php echo $topic->getTreeNodeDisplayName(); ?></a></li><?php
            }
            ?></ul><?php
        } else {
            echo t('No topics.');
        }
    }
    ?>

</div>
