<?php
// This file was auto-generated from sdk-root/src/data/iotevents/2018-07-27/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-07-27', 'endpointPrefix' => 'iotevents', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS IoT Events', 'serviceId' => 'IoT Events', 'signatureVersion' => 'v4', 'signingName' => 'iotevents', 'uid' => 'iotevents-2018-07-27', ], 'operations' => [ 'CreateDetectorModel' => [ 'name' => 'CreateDetectorModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/detector-models', ], 'input' => [ 'shape' => 'CreateDetectorModelRequest', ], 'output' => [ 'shape' => 'CreateDetectorModelResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'CreateInput' => [ 'name' => 'CreateInput', 'http' => [ 'method' => 'POST', 'requestUri' => '/inputs', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateInputRequest', ], 'output' => [ 'shape' => 'CreateInputResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], ], ], 'DeleteDetectorModel' => [ 'name' => 'DeleteDetectorModel', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/detector-models/{detectorModelName}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteDetectorModelRequest', ], 'output' => [ 'shape' => 'DeleteDetectorModelResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'DeleteInput' => [ 'name' => 'DeleteInput', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/inputs/{inputName}', ], 'input' => [ 'shape' => 'DeleteInputRequest', ], 'output' => [ 'shape' => 'DeleteInputResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ResourceInUseException', ], ], ], 'DescribeDetectorModel' => [ 'name' => 'DescribeDetectorModel', 'http' => [ 'method' => 'GET', 'requestUri' => '/detector-models/{detectorModelName}', ], 'input' => [ 'shape' => 'DescribeDetectorModelRequest', ], 'output' => [ 'shape' => 'DescribeDetectorModelResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'DescribeInput' => [ 'name' => 'DescribeInput', 'http' => [ 'method' => 'GET', 'requestUri' => '/inputs/{inputName}', ], 'input' => [ 'shape' => 'DescribeInputRequest', ], 'output' => [ 'shape' => 'DescribeInputResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'DescribeLoggingOptions' => [ 'name' => 'DescribeLoggingOptions', 'http' => [ 'method' => 'GET', 'requestUri' => '/logging', ], 'input' => [ 'shape' => 'DescribeLoggingOptionsRequest', ], 'output' => [ 'shape' => 'DescribeLoggingOptionsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'UnsupportedOperationException', ], ], ], 'ListDetectorModelVersions' => [ 'name' => 'ListDetectorModelVersions', 'http' => [ 'method' => 'GET', 'requestUri' => '/detector-models/{detectorModelName}/versions', ], 'input' => [ 'shape' => 'ListDetectorModelVersionsRequest', ], 'output' => [ 'shape' => 'ListDetectorModelVersionsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'ListDetectorModels' => [ 'name' => 'ListDetectorModels', 'http' => [ 'method' => 'GET', 'requestUri' => '/detector-models', ], 'input' => [ 'shape' => 'ListDetectorModelsRequest', ], 'output' => [ 'shape' => 'ListDetectorModelsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'ListInputs' => [ 'name' => 'ListInputs', 'http' => [ 'method' => 'GET', 'requestUri' => '/inputs', ], 'input' => [ 'shape' => 'ListInputsRequest', ], 'output' => [ 'shape' => 'ListInputsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'PutLoggingOptions' => [ 'name' => 'PutLoggingOptions', 'http' => [ 'method' => 'PUT', 'requestUri' => '/logging', ], 'input' => [ 'shape' => 'PutLoggingOptionsRequest', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'UnsupportedOperationException', ], [ 'shape' => 'ResourceInUseException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'UpdateDetectorModel' => [ 'name' => 'UpdateDetectorModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/detector-models/{detectorModelName}', ], 'input' => [ 'shape' => 'UpdateDetectorModelRequest', ], 'output' => [ 'shape' => 'UpdateDetectorModelResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ResourceInUseException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], ], ], 'UpdateInput' => [ 'name' => 'UpdateInput', 'http' => [ 'method' => 'PUT', 'requestUri' => '/inputs/{inputName}', ], 'input' => [ 'shape' => 'UpdateInputRequest', ], 'output' => [ 'shape' => 'UpdateInputResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'ResourceInUseException', ], ], ], ], 'shapes' => [ 'Action' => [ 'type' => 'structure', 'members' => [ 'setVariable' => [ 'shape' => 'SetVariableAction', ], 'sns' => [ 'shape' => 'SNSTopicPublishAction', ], 'iotTopicPublish' => [ 'shape' => 'IotTopicPublishAction', ], 'setTimer' => [ 'shape' => 'SetTimerAction', ], 'clearTimer' => [ 'shape' => 'ClearTimerAction', ], 'resetTimer' => [ 'shape' => 'ResetTimerAction', ], ], ], 'Actions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Action', ], ], 'AmazonResourceName' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'Attribute' => [ 'type' => 'structure', 'required' => [ 'jsonPath', ], 'members' => [ 'jsonPath' => [ 'shape' => 'AttributeJsonPath', ], ], ], 'AttributeJsonPath' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^((`[\\w\\- ]+`)|([\\w\\-]+))(\\.((`[\\w- ]+`)|([\\w\\-]+)))*$', ], 'Attributes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Attribute', ], 'max' => 200, 'min' => 1, ], 'ClearTimerAction' => [ 'type' => 'structure', 'required' => [ 'timerName', ], 'members' => [ 'timerName' => [ 'shape' => 'TimerName', ], ], ], 'Condition' => [ 'type' => 'string', 'max' => 512, ], 'CreateDetectorModelRequest' => [ 'type' => 'structure', 'required' => [ 'detectorModelName', 'detectorModelDefinition', 'roleArn', ], 'members' => [ 'detectorModelName' => [ 'shape' => 'DetectorModelName', ], 'detectorModelDefinition' => [ 'shape' => 'DetectorModelDefinition', ], 'detectorModelDescription' => [ 'shape' => 'DetectorModelDescription', ], 'key' => [ 'shape' => 'AttributeJsonPath', ], 'roleArn' => [ 'shape' => 'AmazonResourceName', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'CreateDetectorModelResponse' => [ 'type' => 'structure', 'members' => [ 'detectorModelConfiguration' => [ 'shape' => 'DetectorModelConfiguration', ], ], ], 'CreateInputRequest' => [ 'type' => 'structure', 'required' => [ 'inputName', 'inputDefinition', ], 'members' => [ 'inputName' => [ 'shape' => 'InputName', ], 'inputDescription' => [ 'shape' => 'InputDescription', ], 'inputDefinition' => [ 'shape' => 'InputDefinition', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'CreateInputResponse' => [ 'type' => 'structure', 'members' => [ 'inputConfiguration' => [ 'shape' => 'InputConfiguration', ], ], ], 'DeleteDetectorModelRequest' => [ 'type' => 'structure', 'required' => [ 'detectorModelName', ], 'members' => [ 'detectorModelName' => [ 'shape' => 'DetectorModelName', 'location' => 'uri', 'locationName' => 'detectorModelName', ], ], ], 'DeleteDetectorModelResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteInputRequest' => [ 'type' => 'structure', 'required' => [ 'inputName', ], 'members' => [ 'inputName' => [ 'shape' => 'InputName', 'location' => 'uri', 'locationName' => 'inputName', ], ], ], 'DeleteInputResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeDetectorModelRequest' => [ 'type' => 'structure', 'required' => [ 'detectorModelName', ], 'members' => [ 'detectorModelName' => [ 'shape' => 'DetectorModelName', 'location' => 'uri', 'locationName' => 'detectorModelName', ], 'detectorModelVersion' => [ 'shape' => 'DetectorModelVersion', 'location' => 'querystring', 'locationName' => 'version', ], ], ], 'DescribeDetectorModelResponse' => [ 'type' => 'structure', 'members' => [ 'detectorModel' => [ 'shape' => 'DetectorModel', ], ], ], 'DescribeInputRequest' => [ 'type' => 'structure', 'required' => [ 'inputName', ], 'members' => [ 'inputName' => [ 'shape' => 'InputName', 'location' => 'uri', 'locationName' => 'inputName', ], ], ], 'DescribeInputResponse' => [ 'type' => 'structure', 'members' => [ 'input' => [ 'shape' => 'Input', ], ], ], 'DescribeLoggingOptionsRequest' => [ 'type' => 'structure', 'members' => [], ], 'DescribeLoggingOptionsResponse' => [ 'type' => 'structure', 'members' => [ 'loggingOptions' => [ 'shape' => 'LoggingOptions', ], ], ], 'DetectorDebugOption' => [ 'type' => 'structure', 'required' => [ 'detectorModelName', ], 'members' => [ 'detectorModelName' => [ 'shape' => 'DetectorModelName', ], 'keyValue' => [ 'shape' => 'KeyValue', ], ], ], 'DetectorDebugOptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'DetectorDebugOption', ], 'min' => 1, ], 'DetectorModel' => [ 'type' => 'structure', 'members' => [ 'detectorModelDefinition' => [ 'shape' => 'DetectorModelDefinition', ], 'detectorModelConfiguration' => [ 'shape' => 'DetectorModelConfiguration', ], ], ], 'DetectorModelArn' => [ 'type' => 'string', ], 'DetectorModelConfiguration' => [ 'type' => 'structure', 'members' => [ 'detectorModelName' => [ 'shape' => 'DetectorModelName', ], 'detectorModelVersion' => [ 'shape' => 'DetectorModelVersion', ], 'detectorModelDescription' => [ 'shape' => 'DetectorModelDescription', ], 'detectorModelArn' => [ 'shape' => 'DetectorModelArn', ], 'roleArn' => [ 'shape' => 'AmazonResourceName', ], 'creationTime' => [ 'shape' => 'Timestamp', ], 'lastUpdateTime' => [ 'shape' => 'Timestamp', ], 'status' => [ 'shape' => 'DetectorModelVersionStatus', ], 'key' => [ 'shape' => 'AttributeJsonPath', ], ], ], 'DetectorModelDefinition' => [ 'type' => 'structure', 'required' => [ 'states', 'initialStateName', ], 'members' => [ 'states' => [ 'shape' => 'States', ], 'initialStateName' => [ 'shape' => 'StateName', ], ], ], 'DetectorModelDescription' => [ 'type' => 'string', 'max' => 128, ], 'DetectorModelName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^[a-zA-Z0-9_-]+$', ], 'DetectorModelSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'DetectorModelSummary', ], ], 'DetectorModelSummary' => [ 'type' => 'structure', 'members' => [ 'detectorModelName' => [ 'shape' => 'DetectorModelName', ], 'detectorModelDescription' => [ 'shape' => 'DetectorModelDescription', ], 'creationTime' => [ 'shape' => 'Timestamp', ], ], ], 'DetectorModelVersion' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'DetectorModelVersionStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'ACTIVATING', 'INACTIVE', 'DEPRECATED', 'DRAFT', 'PAUSED', 'FAILED', ], ], 'DetectorModelVersionSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'DetectorModelVersionSummary', ], ], 'DetectorModelVersionSummary' => [ 'type' => 'structure', 'members' => [ 'detectorModelName' => [ 'shape' => 'DetectorModelName', ], 'detectorModelVersion' => [ 'shape' => 'DetectorModelVersion', ], 'detectorModelArn' => [ 'shape' => 'DetectorModelArn', ], 'roleArn' => [ 'shape' => 'AmazonResourceName', ], 'creationTime' => [ 'shape' => 'Timestamp', ], 'lastUpdateTime' => [ 'shape' => 'Timestamp', ], 'status' => [ 'shape' => 'DetectorModelVersionStatus', ], ], ], 'Event' => [ 'type' => 'structure', 'required' => [ 'eventName', ], 'members' => [ 'eventName' => [ 'shape' => 'EventName', ], 'condition' => [ 'shape' => 'Condition', ], 'actions' => [ 'shape' => 'Actions', ], ], ], 'EventName' => [ 'type' => 'string', 'max' => 128, ], 'Events' => [ 'type' => 'list', 'member' => [ 'shape' => 'Event', ], ], 'Input' => [ 'type' => 'structure', 'members' => [ 'inputConfiguration' => [ 'shape' => 'InputConfiguration', ], 'inputDefinition' => [ 'shape' => 'InputDefinition', ], ], ], 'InputArn' => [ 'type' => 'string', ], 'InputConfiguration' => [ 'type' => 'structure', 'required' => [ 'inputName', 'inputArn', 'creationTime', 'lastUpdateTime', 'status', ], 'members' => [ 'inputName' => [ 'shape' => 'InputName', ], 'inputDescription' => [ 'shape' => 'InputDescription', ], 'inputArn' => [ 'shape' => 'InputArn', ], 'creationTime' => [ 'shape' => 'Timestamp', ], 'lastUpdateTime' => [ 'shape' => 'Timestamp', ], 'status' => [ 'shape' => 'InputStatus', ], ], ], 'InputDefinition' => [ 'type' => 'structure', 'required' => [ 'attributes', ], 'members' => [ 'attributes' => [ 'shape' => 'Attributes', ], ], ], 'InputDescription' => [ 'type' => 'string', 'max' => 128, ], 'InputName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^[a-zA-Z][a-zA-Z0-9_]*$', ], 'InputStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'UPDATING', 'ACTIVE', 'DELETING', ], ], 'InputSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'InputSummary', ], ], 'InputSummary' => [ 'type' => 'structure', 'members' => [ 'inputName' => [ 'shape' => 'InputName', ], 'inputDescription' => [ 'shape' => 'InputDescription', ], 'inputArn' => [ 'shape' => 'InputArn', ], 'creationTime' => [ 'shape' => 'Timestamp', ], 'lastUpdateTime' => [ 'shape' => 'Timestamp', ], 'status' => [ 'shape' => 'InputStatus', ], ], ], 'InternalFailureException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'IotTopicPublishAction' => [ 'type' => 'structure', 'required' => [ 'mqttTopic', ], 'members' => [ 'mqttTopic' => [ 'shape' => 'MQTTTopic', ], ], ], 'KeyValue' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^[a-zA-Z0-9\\-_]+$', ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 410, ], 'exception' => true, ], 'ListDetectorModelVersionsRequest' => [ 'type' => 'structure', 'required' => [ 'detectorModelName', ], 'members' => [ 'detectorModelName' => [ 'shape' => 'DetectorModelName', 'location' => 'uri', 'locationName' => 'detectorModelName', ], 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListDetectorModelVersionsResponse' => [ 'type' => 'structure', 'members' => [ 'detectorModelVersionSummaries' => [ 'shape' => 'DetectorModelVersionSummaries', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListDetectorModelsRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListDetectorModelsResponse' => [ 'type' => 'structure', 'members' => [ 'detectorModelSummaries' => [ 'shape' => 'DetectorModelSummaries', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListInputsRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListInputsResponse' => [ 'type' => 'structure', 'members' => [ 'inputSummaries' => [ 'shape' => 'InputSummaries', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'AmazonResourceName', 'location' => 'querystring', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'Tags', ], ], ], 'LoggingEnabled' => [ 'type' => 'boolean', ], 'LoggingLevel' => [ 'type' => 'string', 'enum' => [ 'ERROR', 'INFO', 'DEBUG', ], ], 'LoggingOptions' => [ 'type' => 'structure', 'required' => [ 'roleArn', 'level', 'enabled', ], 'members' => [ 'roleArn' => [ 'shape' => 'AmazonResourceName', ], 'level' => [ 'shape' => 'LoggingLevel', ], 'enabled' => [ 'shape' => 'LoggingEnabled', ], 'detectorDebugOptions' => [ 'shape' => 'DetectorDebugOptions', ], ], ], 'MQTTTopic' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'MaxResults' => [ 'type' => 'integer', 'max' => 250, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', ], 'OnEnterLifecycle' => [ 'type' => 'structure', 'members' => [ 'events' => [ 'shape' => 'Events', ], ], ], 'OnExitLifecycle' => [ 'type' => 'structure', 'members' => [ 'events' => [ 'shape' => 'Events', ], ], ], 'OnInputLifecycle' => [ 'type' => 'structure', 'members' => [ 'events' => [ 'shape' => 'Events', ], 'transitionEvents' => [ 'shape' => 'TransitionEvents', ], ], ], 'PutLoggingOptionsRequest' => [ 'type' => 'structure', 'required' => [ 'loggingOptions', ], 'members' => [ 'loggingOptions' => [ 'shape' => 'LoggingOptions', ], ], ], 'ResetTimerAction' => [ 'type' => 'structure', 'required' => [ 'timerName', ], 'members' => [ 'timerName' => [ 'shape' => 'TimerName', ], ], ], 'ResourceAlreadyExistsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], 'resourceId' => [ 'shape' => 'resourceId', ], 'resourceArn' => [ 'shape' => 'resourceArn', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'ResourceInUseException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'SNSTopicPublishAction' => [ 'type' => 'structure', 'required' => [ 'targetArn', ], 'members' => [ 'targetArn' => [ 'shape' => 'AmazonResourceName', ], ], ], 'Seconds' => [ 'type' => 'integer', ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 503, ], 'exception' => true, 'fault' => true, ], 'SetTimerAction' => [ 'type' => 'structure', 'required' => [ 'timerName', 'seconds', ], 'members' => [ 'timerName' => [ 'shape' => 'TimerName', ], 'seconds' => [ 'shape' => 'Seconds', ], ], ], 'SetVariableAction' => [ 'type' => 'structure', 'required' => [ 'variableName', 'value', ], 'members' => [ 'variableName' => [ 'shape' => 'VariableName', ], 'value' => [ 'shape' => 'VariableValue', ], ], ], 'State' => [ 'type' => 'structure', 'required' => [ 'stateName', ], 'members' => [ 'stateName' => [ 'shape' => 'StateName', ], 'onInput' => [ 'shape' => 'OnInputLifecycle', ], 'onEnter' => [ 'shape' => 'OnEnterLifecycle', ], 'onExit' => [ 'shape' => 'OnExitLifecycle', ], ], ], 'StateName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'States' => [ 'type' => 'list', 'member' => [ 'shape' => 'State', ], 'min' => 1, ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'key', 'value', ], 'members' => [ 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'AmazonResourceName', 'location' => 'querystring', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'Tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'TimerName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'TransitionEvent' => [ 'type' => 'structure', 'required' => [ 'eventName', 'condition', 'nextState', ], 'members' => [ 'eventName' => [ 'shape' => 'EventName', ], 'condition' => [ 'shape' => 'Condition', ], 'actions' => [ 'shape' => 'Actions', ], 'nextState' => [ 'shape' => 'StateName', ], ], ], 'TransitionEvents' => [ 'type' => 'list', 'member' => [ 'shape' => 'TransitionEvent', ], ], 'UnsupportedOperationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'errorMessage', ], ], 'error' => [ 'httpStatusCode' => 501, ], 'exception' => true, 'fault' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'AmazonResourceName', 'location' => 'querystring', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeys', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateDetectorModelRequest' => [ 'type' => 'structure', 'required' => [ 'detectorModelName', 'detectorModelDefinition', 'roleArn', ], 'members' => [ 'detectorModelName' => [ 'shape' => 'DetectorModelName', 'location' => 'uri', 'locationName' => 'detectorModelName', ], 'detectorModelDefinition' => [ 'shape' => 'DetectorModelDefinition', ], 'detectorModelDescription' => [ 'shape' => 'DetectorModelDescription', ], 'roleArn' => [ 'shape' => 'AmazonResourceName', ], ], ], 'UpdateDetectorModelResponse' => [ 'type' => 'structure', 'members' => [ 'detectorModelConfiguration' => [ 'shape' => 'DetectorModelConfiguration', ], ], ], 'UpdateInputRequest' => [ 'type' => 'structure', 'required' => [ 'inputName', 'inputDefinition', ], 'members' => [ 'inputName' => [ 'shape' => 'InputName', 'location' => 'uri', 'locationName' => 'inputName', ], 'inputDescription' => [ 'shape' => 'InputDescription', ], 'inputDefinition' => [ 'shape' => 'InputDefinition', ], ], ], 'UpdateInputResponse' => [ 'type' => 'structure', 'members' => [ 'inputConfiguration' => [ 'shape' => 'InputConfiguration', ], ], ], 'VariableName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^[a-zA-Z][a-zA-Z0-9_]*$', ], 'VariableValue' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'errorMessage' => [ 'type' => 'string', ], 'resourceArn' => [ 'type' => 'string', ], 'resourceId' => [ 'type' => 'string', ], ],];
