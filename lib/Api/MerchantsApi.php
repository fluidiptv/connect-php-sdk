<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace SquareConnect\Api;

use \SquareConnect\Configuration;
use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\ObjectSerializer;

/**
 * MerchantsApi Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class MerchantsApi
{

    /**
     * API Client
     * @var \SquareConnect\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \SquareConnect\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://connect.squareup.com');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \SquareConnect\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \SquareConnect\ApiClient $apiClient set the API client
     * @return MerchantsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    /**
     * retrieveMerchant
     *
     * RetrieveMerchant
     *
     * @param string $merchant_id The ID of the merchant to retrieve (required)
     * @return \SquareConnect\Model\RetrieveMerchantResponse
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveMerchant($merchant_id)
    {
        list($response, $statusCode, $httpHeader) = $this->retrieveMerchantWithHttpInfo ($merchant_id);
        return $response; 
    }


    /**
     * retrieveMerchantWithHttpInfo
     *
     * RetrieveMerchant
     *
     * @param string $merchant_id The ID of the merchant to retrieve (required)
     * @return Array of \SquareConnect\Model\RetrieveMerchantResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveMerchantWithHttpInfo($merchant_id)
    {
        
        // verify the required parameter 'merchant_id' is set
        if ($merchant_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $merchant_id when calling retrieveMerchant');
        }
  
        // parse inputs
        $resourcePath = "/v2/merchants/{merchant_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
        $headerParams['Square-Version'] = "2019-09-25";

        
        
        // path params
        if ($merchant_id !== null) {
            $resourcePath = str_replace(
                "{" . "merchant_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($merchant_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\SquareConnect\Model\RetrieveMerchantResponse'
            );
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\SquareConnect\ObjectSerializer::deserialize($response, '\SquareConnect\Model\RetrieveMerchantResponse', $httpHeader), $statusCode, $httpHeader);
                    } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \SquareConnect\ObjectSerializer::deserialize($e->getResponseBody(), '\SquareConnect\Model\RetrieveMerchantResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
}
