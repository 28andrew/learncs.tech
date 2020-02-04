<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
if (!isset($_GET['tags'])) {
    exit();
}
$tags_filter = explode(",", $_GET['tags']);

// SOURCE MAP
$sources_lookup = array();
$result = DB::query("SELECT * FROM `resource_sources`");
foreach ($result as $row) {
    $id = $row['id'];
    $sources_lookup[$id] = $row;
}

// TAG MAP
$tags_lookup = array();
$result = DB::query("SELECT * FROM `resource_tags`");
foreach($result as $row) {
    $id = $row['id'];
    $tags_lookup[$id] = $row;
}

// RESOURCES
$result = DB::query("SELECT a.id, a.title, a.url, a.description, a.source_id, GROUP_CONCAT(b.tag_id ORDER BY b.tag_id) AS tags FROM resources a LEFT JOIN resource_tag_map b ON a.id = b.resource_id GROUP BY a.id, a.title");
$resources = array();
foreach ($result as $row) {
    $resource = array();
    $resource['title'] = $row['title'];
    $resource['url'] = $row['url'];
    $resource['description'] = $row['description'];
    //source
    $source_id = $row['source_id'];
    $resource['source'] = $source_id == -1 ? null : $sources_lookup[$source_id];
    //tags
    $tag_ids = explode(',', $row['tags']);
    // Convert tag ids to tags w/ $tags_lookup
    $tags = array_map(function ($key) use ($tags_lookup) {
        return $tags_lookup[$key];
    }, $tag_ids);
    $tag_names = array_map(function ($key) use ($tags_lookup) {
        return $tags_lookup[$key]['name'];
    }, $tag_ids);
    $resource['tags'] = $tags;
    $resource['tag_names'] = $tag_names;

    $tagMatch = false;
    // Check if any tags match
    foreach ($tags_filter as $tagToLookFor) {
        if (in_array($tagToLookFor, $tag_names)) {
            $tagMatch = true;
            break;
        }
    }
    if (!$tagMatch) {
        continue;
    }
    array_push($resources, $resource);
}
echo(json_encode($resources));
?>